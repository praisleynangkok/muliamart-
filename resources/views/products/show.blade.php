<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Mulia Mart</title>
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
        
        .products-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: var(--shadow);
            overflow: hidden;
            position: relative;
        }
        
        .products-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
        }
        
        .product-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border: 1px solid #f8f9fa;
            position: relative;
        }
        
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .category-filter {
            background: white;
            border-radius: 12px;
            padding: 8px;
            box-shadow: var(--shadow);
        }
        
        .category-btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            transition: var(--transition);
            border: none;
            background: transparent;
            cursor: pointer;
        }
        
        .category-btn.active {
            background: linear-gradient(135deg, var(--primary), #e76f51);
            color: white;
        }
        
        .category-btn:hover:not(.active) {
            background: #f8f9fa;
        }
        
        .search-box {
            background: white;
            border-radius: 12px;
            box-shadow: var(--shadow);
            border: 2px solid transparent;
            transition: var(--transition);
        }
        
        .search-box:focus-within {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(230, 57, 70, 0.1);
        }
        
        .price-tag {
            background: linear-gradient(135deg, var(--primary), #e76f51);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 1.1rem;
        }
        
        .stock-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            z-index: 10;
        }
        
        .in-stock {
            background: linear-gradient(135deg, var(--success), #2ecc71);
            color: white;
        }
        
        .out-of-stock {
            background: linear-gradient(135deg, var(--danger), #c0392b);
            color: white;
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
        
        .empty-state {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 20px;
            padding: 60px 40px;
            text-align: center;
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            gap: 8px;
        }
        
        .page-link {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            border: 2px solid transparent;
        }
        
        .page-link.active {
            background: linear-gradient(135deg, var(--primary), #e76f51);
            color: white;
            border-color: var(--primary);
        }
        
        .page-link:not(.active):hover {
            border-color: var(--primary);
            color: var(--primary);
        }
    </style>
</head>
<body class="py-8">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Header Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                Koleksi <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-orange-500">Produk</span> Kami
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Temukan berbagai pilihan makanan berkualitas dengan cita rasa autentik dari dapur Mulia Mart
            </p>
        </div>

        <!-- Products Container -->
        <div class="products-container p-6 md:p-8">
            <!-- Filter and Search Section -->
            <div class="flex flex-col lg:flex-row gap-6 mb-8">
                <!-- Search Box -->
                <div class="flex-1">
                    <div class="search-box p-4">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-search text-gray-400"></i>
                            <input 
                                type="text" 
                                placeholder="Cari produk makanan..." 
                                class="w-full focus:outline-none text-gray-700 placeholder-gray-400"
                            >
                        </div>
                    </div>
                </div>
                
                <!-- Category Filter -->
                <div class="category-filter">
                    <div class="flex flex-wrap gap-2">
                        <button class="category-btn active">Semua</button>
                        <button class="category-btn">Roti & Kue</button>
                        <button class="category-btn">Kue Kering</button>
                        <button class="category-btn">Snack</button>
                        <button class="category-btn">Minuman</button>
                        <button class="category-btn">Spesial</button>
                    </div>
                </div>
            </div>

            <!-- Success Message -->
            @if(session('success'))
                <div class="bg-green-50 border border-green-200 rounded-xl p-4 mb-6 flex items-center gap-3">
                    <div class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center">
                        <i class="fas fa-check text-white text-sm"></i>
                    </div>
                    <div>
                        <p class="text-green-800 font-semibold">{{ session('success') }}</p>
                    </div>
                </div>
            @endif

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 mb-8">
                <a href="{{ route('products.create') }}" class="action-btn btn-primary">
                    <i class="fas fa-plus"></i>
                    Tambah Produk Baru
                </a>
                <a href="/dashboard" class="action-btn btn-outline">
                    <i class="fas fa-arrow-left"></i>
                    Kembali ke Dashboard
                </a>
            </div>

            <!-- Products Grid -->
            @if($products->isEmpty())
                <!-- Empty State -->
                <div class="empty-state">
                    <div class="w-24 h-24 bg-gradient-to-r from-gray-200 to-gray-300 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-box-open text-3xl text-gray-400"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-600 mb-3">Belum ada produk</h3>
                    <p class="text-gray-500 mb-6 max-w-md mx-auto">
                        Mulai jualan dengan menambahkan produk makanan pertama Anda. Pelanggan sedang menunggu kelezatan dari dapur Anda!
                    </p>
                    <a href="{{ route('products.create') }}" class="action-btn btn-primary inline-flex">
                        <i class="fas fa-plus"></i>
                        Tambah Produk Pertama
                    </a>
                </div>
            @else
                <!-- Products Count -->
                <div class="flex justify-between items-center mb-6">
                    <p class="text-gray-600">
                        Menampilkan <span class="font-semibold text-gray-800">{{ $products->count() }}</span> produk
                    </p>
                    <div class="flex items-center gap-4">
                        <select class="bg-white border border-gray-200 rounded-lg px-4 py-2 focus:outline-none focus:border-red-500">
                            <option>Urutkan: Terbaru</option>
                            <option>Urutkan: Harga Terendah</option>
                            <option>Urutkan: Harga Tertinggi</option>
                            <option>Urutkan: Nama A-Z</option>
                        </select>
                    </div>
                </div>

                <!-- Products Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                    @foreach ($products as $product)
                        <div class="product-card group">
                            <!-- Product Image -->
                            <div class="relative overflow-hidden">
                                @if($product->image)
                                    <img 
                                        src="{{ asset('storage/' . $product->image) }}" 
                                        alt="{{ $product->name }}" 
                                        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                                    >
                                @else
                                    <div class="w-full h-48 bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                                        <i class="fas fa-image text-4xl text-gray-400"></i>
                                    </div>
                                @endif
                                
                                <!-- Stock Badge -->
                                <div class="stock-badge {{ $product->stock > 0 ? 'in-stock' : 'out-of-stock' }}">
                                    {{ $product->stock > 0 ? 'Stok: ' . $product->stock : 'Habis' }}
                                </div>
                                
                                <!-- Quick Actions Overlay -->
                                <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100">
                                    <a href="{{ route('products.show', $product->id) }}" 
                                       class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                                        <i class="fas fa-eye text-gray-700"></i>
                                    </a>
                                    <a href="{{ route('products.edit', $product->id) }}" 
                                       class="w-10 h-10 bg-white rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                                        <i class="fas fa-edit text-blue-500"></i>
                                    </a>
                                </div>
                            </div>
                            
                            <!-- Product Info -->
                            <div class="p-5">
                                <h3 class="font-bold text-lg text-gray-800 mb-2 line-clamp-2 leading-tight">
                                    {{ $product->name }}
                                </h3>
                                
                                <p class="text-gray-600 text-sm mb-4 line-clamp-2 leading-relaxed">
                                    {{ $product->description }}
                                </p>
                                
                                <div class="flex items-center justify-between mb-3">
                                    <div class="price-tag">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        <i class="fas fa-store mr-1"></i>
                                        {{ $product->user->name }}
                                    </div>
                                </div>
                                
                                <!-- Action Buttons -->
                                <div class="flex gap-2">
                                    <a href="{{ route('products.show', $product->id) }}" 
                                       class="flex-1 action-btn btn-outline text-center justify-center text-sm py-2">
                                        <i class="fas fa-eye"></i>
                                        Detail
                                    </a>
                                    @if(Auth::check() && (Auth::id() == $product->user_id || Auth::user()->role == 'admin'))
                                        <a href="{{ route('products.edit', $product->id) }}" 
                                           class="flex-1 action-btn bg-blue-500 text-white text-center justify-center text-sm py-2 hover:bg-blue-600">
                                            <i class="fas fa-edit"></i>
                                            Edit
                                        </a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="flex-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" 
                                                    class="w-full action-btn bg-red-500 text-white text-center justify-center text-sm py-2 hover:bg-red-600"
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                                <i class="fas fa-trash"></i>
                                                Hapus
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                @if($products->hasPages())
                    <div class="pagination mt-8">
                        @if($products->onFirstPage())
                            <span class="page-link text-gray-400 cursor-not-allowed">
                                <i class="fas fa-chevron-left"></i>
                            </span>
                        @else
                            <a href="{{ $products->previousPageUrl() }}" class="page-link text-gray-600 hover:text-red-500">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        @endif

                        @foreach(range(1, $products->lastPage()) as $page)
                            @if($page == $products->currentPage())
                                <span class="page-link active">{{ $page }}</span>
                            @else
                                <a href="{{ $products->url($page) }}" class="page-link text-gray-600">{{ $page }}</a>
                            @endif
                        @endforeach

                        @if($products->hasMorePages())
                            <a href="{{ $products->nextPageUrl() }}" class="page-link text-gray-600 hover:text-red-500">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        @else
                            <span class="page-link text-gray-400 cursor-not-allowed">
                                <i class="fas fa-chevron-right"></i>
                            </span>
                        @endif
                    </div>
                @endif
            @endif
        </div>

        <!-- Features Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
            <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-red-500">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-shipping-fast text-red-500 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Gratis Ongkir</h4>
                        <p class="text-gray-600 text-sm">Minimal pembelian Rp 100.000</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-green-500">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-award text-green-500 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Kualitas Terjamin</h4>
                        <p class="text-gray-600 text-sm">Bahan premium & fresh</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-blue-500">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-headset text-blue-500 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">CS 24/7</h4>
                        <p class="text-gray-600 text-sm">Siap membantu Anda</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Category filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const categoryBtns = document.querySelectorAll('.category-btn');
            
            categoryBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    categoryBtns.forEach(b => b.classList.remove('active'));
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Here you would typically filter the products
                    // For now, we'll just show a simple alert
                    console.log('Filter by:', this.textContent);
                });
            });

            // Add hover effects to product cards
            const productCards = document.querySelectorAll('.product-card');
            productCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-8px)';
                });
                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
</body>
</html>