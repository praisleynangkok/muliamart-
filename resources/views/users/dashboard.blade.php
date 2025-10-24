<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User - Mulia Mart</title>
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
        
        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }
        
        .dashboard-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: var(--shadow);
            overflow: hidden;
            position: relative;
        }
        
        .dashboard-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
        }
        
        .menu-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-decoration: none;
            display: block;
            position: relative;
            overflow: hidden;
        }
        
        .menu-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }
        
        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid #f0f0f0;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .gradient-purple {
            background: linear-gradient(135deg, var(--primary), #e76f51);
        }
        
        .gradient-green {
            background: linear-gradient(135deg, var(--accent), #2a9d8f);
        }
        
        .gradient-blue {
            background: linear-gradient(135deg, #4361ee, #3a0ca3);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="py-8">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Dashboard Card -->
        <div class="dashboard-card p-8 mb-8">
            <!-- Header Section -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8">
                <div class="mb-4 md:mb-0">
                    <h1 class="text-3xl font-bold text-gradient mb-2">Halo, {{ $user->name }} 👋</h1>
                    <p class="text-gray-600 text-lg">Selamat datang di dashboard Mulia Mart</p>
                </div>
                <div class="flex items-center gap-4 bg-gradient-to-r from-purple-50 to-pink-50 px-6 py-3 rounded-full">
                    <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                        {{ strtoupper(substr($user->name, 0, 1)) }}
                    </div>
                    <div>
                        <p class="font-semibold text-gray-800">{{ $user->name }}</p>
                        <p class="text-sm text-gray-600">Seller Mulia Mart</p>
                    </div>
                </div>
            </div>

            <!-- Quick Stats -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-gradient-to-r from-blue-50 to-cyan-50 p-6 rounded-xl border border-blue-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-blue-600 text-sm font-semibold">Total Produk</p>
                            <p class="text-2xl font-bold text-gray-800">{{ $products->count() }}</p>
                        </div>
                        <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-box text-white text-lg"></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-r from-green-50 to-emerald-50 p-6 rounded-xl border border-green-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-green-600 text-sm font-semibold">Produk Aktif</p>
                            <p class="text-2xl font-bold text-gray-800">{{ $products->where('stock', '>', 0)->count() }}</p>
                        </div>
                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-check-circle text-white text-lg"></i>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-r from-purple-50 to-pink-50 p-6 rounded-xl border border-purple-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-purple-600 text-sm font-semibold">Habis Stok</p>
                            <p class="text-2xl font-bold text-gray-800">{{ $products->where('stock', 0)->count() }}</p>
                        </div>
                        <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center">
                            <i class="fas fa-exclamation-triangle text-white text-lg"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action Menu -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <a href="{{ route('products.create') }}" class="menu-card gradient-purple text-white group">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <i class="fas fa-plus text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Tambah Produk Baru</h3>
                            <p class="text-white/80">Buat produk makanan baru untuk dijual</p>
                        </div>
                        <i class="fas fa-arrow-right text-xl opacity-70 group-hover:translate-x-2 transition-transform"></i>
                    </div>
                </a>
                
                <a href="{{ route('products.index') }}" class="menu-card gradient-green text-white group">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="w-14 h-14 bg-white/20 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                                <i class="fas fa-store text-2xl"></i>
                            </div>
                            <h3 class="text-xl font-bold mb-2">Lihat Semua Produk</h3>
                            <p class="text-white/80">Kelola dan lihat semua produk kamu</p>
                        </div>
                        <i class="fas fa-arrow-right text-xl opacity-70 group-hover:translate-x-2 transition-transform"></i>
                    </div>
                </a>
            </div>

            <!-- Divider -->
            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div class="relative flex justify-center">
                    <span class="bg-white px-4 text-sm text-gray-500">
                        <i class="fas fa-boxes mr-2"></i>Produk Kamu
                    </span>
                </div>
            </div>

            <!-- Products Section -->
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center">
                    <i class="fas fa-box-open mr-3 text-purple-500"></i>
                    Daftar Produk
                </h2>

                @if($products->isEmpty())
                    <div class="text-center py-12">
                        <div class="w-24 h-24 bg-gradient-to-r from-purple-100 to-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-box-open text-3xl text-purple-400"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-600 mb-2">Belum ada produk</h3>
                        <p class="text-gray-500 mb-6">Mulai jualan dengan menambahkan produk pertama kamu</p>
                        <a href="{{ route('products.create') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-500 to-pink-500 text-white px-6 py-3 rounded-full font-semibold hover:shadow-lg transition-all">
                            <i class="fas fa-plus"></i>
                            Tambah Produk Pertama
                        </a>
                    </div>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @foreach ($products as $product)
                            <div class="product-card group">
                                <div class="relative overflow-hidden">
                                    @if($product->image)
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" 
                                             class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300">
                                    @else
                                        <div class="w-full h-48 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                            <i class="fas fa-image text-4xl text-gray-400"></i>
                                        </div>
                                    @endif
                                    
                                    <!-- Stock Badge -->
                                    <div class="absolute top-3 right-3">
                                        @if($product->stock > 0)
                                            <span class="bg-green-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                                                <i class="fas fa-check mr-1"></i>Stok: {{ $product->stock }}
                                            </span>
                                        @else
                                            <span class="bg-red-500 text-white px-3 py-1 rounded-full text-xs font-semibold">
                                                <i class="fas fa-times mr-1"></i>Habis
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="p-5">
                                    <h3 class="font-bold text-lg text-gray-800 mb-2 line-clamp-1">{{ $product->name }}</h3>
                                    <p class="text-gray-600 text-sm mb-3 line-clamp-2">{{ $product->description }}</p>
                                    
                                    <div class="flex items-center justify-between">
                                        <p class="font-bold text-lg text-gradient">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                                        <div class="flex gap-2">
                                            <a href="{{ route('products.edit', $product->id) }}" 
                                               class="w-8 h-8 bg-blue-500 text-white rounded-full flex items-center justify-center hover:bg-blue-600 transition">
                                                <i class="fas fa-edit text-sm"></i>
                                            </a>
                                            <a href="{{ route('products.show', $product->id) }}" 
                                               class="w-8 h-8 bg-green-500 text-white rounded-full flex items-center justify-center hover:bg-green-600 transition">
                                                <i class="fas fa-eye text-sm"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    
                    <!-- View All Products Link -->
                    <div class="text-center mt-8">
                        <a href="{{ route('products.index') }}" class="inline-flex items-center gap-2 text-purple-600 hover:text-purple-700 font-semibold">
                            Lihat Semua Produk
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                @endif
            </div>
        </div>
        
        <!-- Quick Tips -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl p-6 shadow-sm border border-blue-100">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-lightbulb text-blue-500 text-xl"></i>
                </div>
                <h4 class="font-semibold text-gray-800 mb-2">Tips Jualan</h4>
                <p class="text-gray-600 text-sm">Upload foto produk yang menarik untuk meningkatkan penjualan</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-sm border border-green-100">
                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-chart-line text-green-500 text-xl"></i>
                </div>
                <h4 class="font-semibold text-gray-800 mb-2">Update Stok</h4>
                <p class="text-gray-600 text-sm">Pastikan stok produk selalu terupdate untuk menghindari kecewa pelanggan</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-sm border border-purple-100">
                <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-4">
                    <i class="fas fa-star text-purple-500 text-xl"></i>
                </div>
                <h4 class="font-semibold text-gray-800 mb-2">Kualitas Produk</h4>
                <p class="text-gray-600 text-sm">Jaga kualitas dan rasa produk untuk mendapatkan review yang baik</p>
            </div>
        </div>
    </div>

    <script>
        // Tambahkan efek hover yang smooth
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.product-card, .menu-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-10px)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
</body>
</html>