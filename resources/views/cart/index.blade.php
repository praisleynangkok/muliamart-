<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja - Mulia Mart</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #e63946;
            --secondary: #f4a261;
            --accent: #2a9d8f;
            --light: #f8f9fa;
            --dark: #264653;
            --success: #27ae60;
            --danger: #e74c3c;
            --shadow: 0 10px 30px rgba(0,0,0,0.1);
            --transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #fef6e4 0%, #f8edeb 100%);
            min-height: 100vh;
        }
        
        .cart-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 24px;
            box-shadow: var(--shadow);
            overflow: hidden;
            position: relative;
        }
        
        .cart-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
        }
        
        .cart-item {
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid #f8f9fa;
        }
        
        .cart-item:hover {
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transform: translateY(-2px);
        }
        
        .action-btn {
            padding: 10px 20px;
            border-radius: 10px;
            font-weight: 600;
            transition: var(--transition);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: none;
            cursor: pointer;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #e76f51);
            color: white;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(230, 57, 70, 0.3);
        }
        
        .btn-success {
            background: linear-gradient(135deg, var(--success), #2ecc71);
            color: white;
        }
        
        .btn-success:hover {
            background: linear-gradient(135deg, #219955, #27ae60);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(39, 174, 96, 0.3);
        }
        
        .btn-outline {
            background: transparent;
            color: var(--dark);
            border: 2px solid var(--dark);
        }
        
        .btn-outline:hover {
            background: var(--dark);
            color: white;
            transform: translateY(-2px);
        }
        
        .quantity-control {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .quantity-btn {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--light);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .quantity-btn:hover {
            background: var(--primary);
            color: white;
        }
        
        .quantity-input {
            width: 50px;
            text-align: center;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 0.25rem;
        }
        
        .summary-card {
            background: white;
            border-radius: 16px;
            padding: 1.5rem;
            box-shadow: var(--shadow);
            position: sticky;
            top: 20px;
            border: 1px solid #f8f9fa;
        }
        
        .empty-cart {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 20px;
            padding: 60px 40px;
            text-align: center;
        }
        
        /* Responsive improvements */
        @media (max-width: 768px) {
            .cart-item {
                padding: 1rem;
            }
            
            .action-btn {
                padding: 8px 16px;
                font-size: 0.9rem;
            }
            
            .cart-container {
                padding: 1rem;
            }
        }
    </style>
</head>
<body class="py-8">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                🛒 Keranjang <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-orange-500">Belanja</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Periksa dan kelola produk yang akan Anda beli
            </p>
        </div>

        <!-- Cart Container -->
        <div class="cart-container p-6 md:p-8">
            <!-- Navigation Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 mb-8">
                <a href="/products" class="action-btn btn-outline">
                    <i class="fas fa-arrow-left"></i>
                    Lanjut Belanja
                </a>
                <button class="action-btn bg-yellow-500 text-white hover:bg-yellow-600">
                    <i class="fas fa-sync-alt"></i>
                    Perbarui Keranjang
                </button>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Cart Items -->
                <div class="lg:col-span-2 space-y-6">
                    <!-- Cart Item 1 -->
                    <div class="cart-item">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1555507036-ab794f27d2e9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                                     alt="Roti Maryam Special" 
                                     class="w-full md:w-32 h-32 object-cover rounded-lg">
                            </div>
                            <div class="flex-grow">
                                <div class="flex justify-between">
                                    <h3 class="font-bold text-lg text-gray-800">Roti Maryam Special dengan Daging</h3>
                                    <form action="#" method="POST" onsubmit="return confirm('Hapus produk ini dari keranjang?')">
                                        <button class="text-red-500 hover:text-red-700 transition-colors">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                <p class="text-gray-600 text-sm my-2">Roti dengan isian coklat premium yang lumer dan lembut</p>
                                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mt-4">
                                    <div class="quantity-control">
                                        <button class="quantity-btn">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <input type="number" class="quantity-input" value="2" min="1">
                                        <button class="quantity-btn">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="text-lg font-bold text-gray-800">
                                        Rp 50.000
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Cart Item 2 -->
                    <div class="cart-item">
                        <div class="flex flex-col md:flex-row gap-4">
                            <div class="flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1563729784474-d77dbb933a9e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" 
                                     alt="Kue Kering Coklat" 
                                     class="w-full md:w-32 h-32 object-cover rounded-lg">
                            </div>
                            <div class="flex-grow">
                                <div class="flex justify-between">
                                    <h3 class="font-bold text-lg text-gray-800">Kue Kering Coklat</h3>
                                    <form action="#" method="POST" onsubmit="return confirm('Hapus produk ini dari keranjang?')">
                                        <button class="text-red-500 hover:text-red-700 transition-colors">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                <p class="text-gray-600 text-sm my-2">Kue kering dengan taburan coklat chips yang renyah dan lezat</p>
                                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mt-4">
                                    <div class="quantity-control">
                                        <button class="quantity-btn">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <input type="number" class="quantity-input" value="1" min="1">
                                        <button class="quantity-btn">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="text-lg font-bold text-gray-800">
                                        Rp 45.000
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Empty Cart State (hidden by default) -->
                    <div class="empty-cart hidden">
                        <div class="w-24 h-24 bg-gradient-to-r from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-shopping-cart text-3xl text-gray-400"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-600 mb-3">Keranjang Kosong</h3>
                        <p class="text-gray-500 mb-6 max-w-md mx-auto">
                            Keranjang belanja Anda masih kosong. Ayo mulai berbelanja!
                        </p>
                        <a href="/products" class="action-btn btn-primary inline-flex">
                            <i class="fas fa-store"></i>
                            Mulai Belanja
                        </a>
                    </div>
                </div>
                
                <!-- Order Summary -->
                <div class="lg:col-span-1">
                    <div class="summary-card">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Ringkasan Pesanan</h3>
                        
                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Subtotal</span>
                                <span class="font-semibold">Rp 95.000</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Biaya Pengiriman</span>
                                <span class="font-semibold">Rp 15.000</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Diskon</span>
                                <span class="font-semibold text-green-600">- Rp 10.000</span>
                            </div>
                            <hr class="my-4">
                            <div class="flex justify-between text-lg font-bold">
                                <span>Total</span>
                                <span>Rp 100.000</span>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Kode Promo</label>
                            <div class="flex gap-2">
                                <input type="text" class="flex-1 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-red-500" placeholder="Masukkan kode">
                                <button class="action-btn bg-gray-200 text-gray-800 hover:bg-gray-300">
                                    Terapkan
                                </button>
                            </div>
                        </div>
                        
                        <a href="/checkout" class="w-full action-btn btn-success text-center justify-center mb-4">
                            <i class="fas fa-credit-card"></i>
                            Lanjut ke Pembayaran
                        </a>
                        
                        <div class="text-center text-sm text-gray-500">
                            <p>Dengan melanjutkan, Anda menyetujui</p>
                            <a href="#" class="text-red-500 hover:underline">Syarat & Ketentuan</a>
                        </div>
                    </div>
                    
                    <!-- Features -->
                    <div class="mt-6 space-y-4">
                        <div class="flex items-center gap-3 text-sm text-gray-600">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-shield-alt text-green-500"></i>
                            </div>
                            <span>Pembayaran Aman & Terlindungi</span>
                        </div>
                        <div class="flex items-center gap-3 text-sm text-gray-600">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-undo-alt text-blue-500"></i>
                            </div>
                            <span>Kebijakan Pengembalian 30 Hari</span>
                        </div>
                        <div class="flex items-center gap-3 text-sm text-gray-600">
                            <div class="w-8 h-8 bg-purple-100 rounded-full flex items-center justify-center">
                                <i class="fas fa-headset text-purple-500"></i>
                            </div>
                            <span>Bantuan 24/7</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-12">
            <div class="bg-white rounded-xl p-6 text-center shadow-sm border-l-4 border-red-500">
                <i class="fas fa-shipping-fast text-3xl text-red-500 mb-3"></i>
                <h4 class="font-bold text-gray-800">Gratis Ongkir</h4>
                <p class="text-gray-600 text-sm">Min. pembelian Rp 100rb</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 text-center shadow-sm border-l-4 border-green-500">
                <i class="fas fa-award text-3xl text-green-500 mb-3"></i>
                <h4 class="font-bold text-gray-800">Kualitas Premium</h4>
                <p class="text-gray-600 text-sm">Bahan pilihan terbaik</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 text-center shadow-sm border-l-4 border-blue-500">
                <i class="fas fa-clock text-3xl text-blue-500 mb-3"></i>
                <h4 class="font-bold text-gray-800">Fresh Setiap Hari</h4>
                <p class="text-gray-600 text-sm">Dibuat hari H juga</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 text-center shadow-sm border-l-4 border-purple-500">
                <i class="fas fa-headset text-3xl text-purple-500 mb-3"></i>
                <h4 class="font-bold text-gray-800">CS 24/7</h4>
                <p class="text-gray-600 text-sm">Siap membantu Anda</p>
            </div>
        </div>
    </div>

    <script>
        // Quantity control functionality
        document.addEventListener('DOMContentLoaded', function() {
            const quantityInputs = document.querySelectorAll('.quantity-input');
            const minusButtons = document.querySelectorAll('.quantity-btn:first-child');
            const plusButtons = document.querySelectorAll('.quantity-btn:last-child');
            
            minusButtons.forEach((button, index) => {
                button.addEventListener('click', function() {
                    const input = quantityInputs[index];
                    if (parseInt(input.value) > 1) {
                        input.value = parseInt(input.value) - 1;
                    }
                });
            });
            
            plusButtons.forEach((button, index) => {
                button.addEventListener('click', function() {
                    const input = quantityInputs[index];
                    input.value = parseInt(input.value) + 1;
                });
            });
            
            // Delete item functionality
            const deleteButtons = document.querySelectorAll('.fa-trash');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const cartItem = this.closest('.cart-item');
                    cartItem.style.opacity = '0';
                    setTimeout(() => {
                        cartItem.remove();
                        // Check if cart is empty
                        if (document.querySelectorAll('.cart-item').length === 0) {
                            document.querySelector('.empty-cart').classList.remove('hidden');
                        }
                    }, 300);
                });
            });
        });
    </script>
</body>
</html>