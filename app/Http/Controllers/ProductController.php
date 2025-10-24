<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->get();
        return view('products.index', compact('products'));
    }

    public function create()
{
    return view('products.create');

}


    public function store(Request $request)
    {
        if (Auth::user()->role !== 'mitra') {
            return redirect()->route('products.index')->with('error', 'Hanya mitra yang bisa menambahkan produk.');
        }

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        $imagePath = $request->file('image')
            ? $request->file('image')->store('products', 'public')
            : null;

        Product::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'stock' => $request->stock,
            'image' => $imagePath,
        ]);

        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan!');
    }

    public function destroy(Product $product)
    {
        if (Auth::id() == $product->user_id || Auth::user()->role == 'mitra') {
            $product->delete();
        }
        return back();
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function dashboard()
    {
        $user = Auth::user();
        $products = $user->products()->latest()->get();
        return view('users.dashboard', compact('user', 'products'));
    }

    public function home()
    {
        $products = Product::latest()->get();
        return view('home', compact('products'));
    }
}
