<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;

class CartController extends Controller
{
    // 🛒 Tampilkan isi keranjang
    public function index()
    {
        $cart = session()->get('cart', []);

        // Hitung total keseluruhan
        $total = collect($cart)->sum('total');

        return view('cart.index', compact('cart', 'total'));
    }

    // ➕ Tambahkan produk ke keranjang
    public function add(Request $request, Product $product)
    {
        $quantity = $request->input('quantity', 1);

        if ($quantity < 10) {
            return back()->with('error', 'Minimal pembelian adalah 10 item.');
        }

        $cart = session()->get('cart', []);

        // Kalau sudah ada, tambahkan jumlahnya
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $quantity;
            $cart[$product->id]['total'] = $cart[$product->id]['quantity'] * $cart[$product->id]['price'];
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => $product->price,
                'total' => $product->price * $quantity,
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', 'Produk berhasil ditambahkan ke keranjang!');
    }

    // 🔁 Update jumlah produk
    public function update(Request $request, Product $product)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            $quantity = $request->input('quantity', 1);
            if ($quantity < 10) {
                return back()->with('error', 'Minimal pembelian adalah 10 item.');
            }

            $cart[$product->id]['quantity'] = $quantity;
            $cart[$product->id]['total'] = $cart[$product->id]['price'] * $quantity;
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Keranjang diperbarui!');
    }

    // ❌ Hapus produk dari keranjang
    public function remove(Product $product)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$product->id])) {
            unset($cart[$product->id]);
            session()->put('cart', $cart);
        }

        return back()->with('success', 'Produk telah dihapus dari keranjang.');
    }

    // 💳 Halaman Checkout
    public function checkout()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')->with('error', 'Keranjang masih kosong!');
        }

        $total = collect($cart)->sum('total');
        return view('cart.checkout', compact('cart', 'total'));
    }

    // 🚀 Proses Checkout
    public function processCheckout(Request $request)
    {
        $cart = session()->get('cart', []);
        if (empty($cart)) {
            return back()->with('error', 'Keranjang kosong.');
        }

        $request->validate([
            'address' => 'required|string|max:255'
        ]);

        $total = collect($cart)->sum('total');

        // Simpan pesanan
        $order = Order::create([
            'user_id' => auth()->id(),
            'address' => $request->address,
            'total' => $total,
            'status' => 'pending',
        ]);

        // Simpan detail item pesanan
        foreach ($cart as $productId => $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        // Kosongkan keranjang
        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Pesanan berhasil dibuat!');
    }
}
