<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Mulia Mart</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .product-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            border: 1px solid rgba(229, 231, 235, 0.8);
        }
        
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .stock-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            z-index: 10;
        }
        
        .in-stock {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
        }
        
        .out-of-stock {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
        }
        
        .seller-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(4px);
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
            color: #4b5563;
            z-index: 10;
        }
        
        .action-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 16px;
            border-radius: 10px;
            font-weight: 600;
            transition: all 0.2s ease;
            border: none;
            cursor: pointer;
        }
        
        .btn-cart {
            background: linear-gradient(135deg, #ef4444, #f97316);
            color: white;
        }
        
        .btn-cart:hover {
            background: linear-gradient(135deg, #dc2626, #ea580c);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
        }
        
        .btn-outline {
            background: transparent;
            border: 1.5px solid #ef4444;
            color: #ef4444;
        }
        
        .btn-outline:hover {
            background: #ef4444;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2);
        }
        
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .quantity-controls {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .quantity-controls button {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f3f4f6;
            border: none;
            font-weight: 600;
            transition: all 0.2s ease;
            cursor: pointer;
        }
        
        .quantity-controls button:hover {
            background: #e5e7eb;
            transform: scale(1.05);
        }
        
        .quantity-controls input {
            width: 48px;
            height: 32px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            text-align: center;
            font-weight: 600;
        }
        
        .empty-state {
            padding: 3rem 1rem;
            color: #6b7280;
        }
        
        .empty-state i {
            font-size: 3rem;
            margin-bottom: 1rem;
            opacity: 0.5;
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #fef2f2, #fffbeb);
            padding: 2rem 1rem;
            border-radius: 20px;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 py-8">
        <div class="hero-gradient text-center mb-12">
            <h1 class="text-3xl md:text-5xl font-bold text-gray-800 mb-4">
                Koleksi <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-orange-500">Produk</span> Kami
            </h1>
            <p class="text-lg md:text-xl text-gray-600 max-w-2xl mx-auto">
                Temukan berbagai pilihan makanan berkualitas dari mitra Mulia Mart
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8">
            <!-- Product 1 -->
            <div class="product-card group">
                <div class="relative">
                    <img 
                        src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                        alt="Salad Buah Segar" 
                        class="w-full h-40 md:h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                    >
                    
                    <div class="stock-badge in-stock">
                        <i class="fas fa-check mr-1"></i> Stok: 15
                    </div>

                    <div class="seller-badge">
                        <i class="fas fa-store mr-1"></i> Toko Buah Segar
                    </div>
                </div>

                <div class="p-4 md:p-5">
                    <h3 class="font-bold text-base md:text-lg text-gray-800 mb-2 line-clamp-2">Salad Buah Segar dengan Yogurt</h3>
                    <p class="text-gray-600 text-xs md:text-sm mb-3 md:mb-4 line-clamp-2">Campuran buah-buahan segar dengan yogurt alami dan madu. Sempurna untuk sarapan atau camilan sehat.</p>

                    <div class="flex items-center justify-between mb-3 md:mb-4">
                        <div class="text-lg font-bold text-red-500">Rp 25.000</div>
                    </div>

                    <form action="#" method="POST" class="space-y-3">
                        <div class="quantity-controls">
                            <button type="button" class="decrease-qty">−</button>
                            <input type="number" name="quantity" value="1" min="1" max="15">
                            <button type="button" class="increase-qty">+</button>
                        </div>
                        <button class="w-full action-btn btn-cart text-xs md:text-sm">
                            <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                        </button>
                    </form>

                    <a href="#" class="mt-2 block w-full action-btn btn-outline text-center text-xs md:text-sm">
                        <i class="fas fa-eye"></i> Detail
                    </a>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card group">
                <div class="relative">
                    <img 
                        src="https://images.unsplash.com/photo-1565958011703-44f9829ba187?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                        alt="Burger Premium" 
                        class="w-full h-40 md:h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                    >
                    
                    <div class="stock-badge in-stock">
                        <i class="fas fa-check mr-1"></i> Stok: 8
                    </div>

                    <div class="seller-badge">
                        <i class="fas fa-store mr-1"></i> Burger House
                    </div>
                </div>

                <div class="p-4 md:p-5">
                    <h3 class="font-bold text-base md:text-lg text-gray-800 mb-2 line-clamp-2">Burger Premium dengan Daging Angus</h3>
                    <p class="text-gray-600 text-xs md:text-sm mb-3 md:mb-4 line-clamp-2">Burger dengan daging Angus pilihan, keju cheddar, sayuran segar, dan saus spesial.</p>

                    <div class="flex items-center justify-between mb-3 md:mb-4">
                        <div class="text-lg font-bold text-red-500">Rp 45.000</div>
                    </div>

                    <form action="#" method="POST" class="space-y-3">
                        <div class="quantity-controls">
                            <button type="button" class="decrease-qty">−</button>
                            <input type="number" name="quantity" value="1" min="1" max="8">
                            <button type="button" class="increase-qty">+</button>
                        </div>
                        <button class="w-full action-btn btn-cart text-xs md:text-sm">
                            <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                        </button>
                    </form>

                    <a href="#" class="mt-2 block w-full action-btn btn-outline text-center text-xs md:text-sm">
                        <i class="fas fa-eye"></i> Detail
                    </a>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card group">
                <div class="relative">
                    <img 
                        src="https://images.unsplash.com/photo-1567620905732-2d1ec7ab7445?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                        alt="Pancake Madu" 
                        class="w-full h-40 md:h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                    >
                    
                    <div class="stock-badge out-of-stock">
                        <i class="fas fa-times mr-1"></i> Habis
                    </div>

                    <div class="seller-badge">
                        <i class="fas fa-store mr-1"></i> Pancake Corner
                    </div>
                </div>

                <div class="p-4 md:p-5">
                    <h3 class="font-bold text-base md:text-lg text-gray-800 mb-2 line-clamp-2">Pancake dengan Madu dan Buah Beri</h3>
                    <p class="text-gray-600 text-xs md:text-sm mb-3 md:mb-4 line-clamp-2">Pancake lembut disajikan dengan madu asli dan buah beri segar. Cocok untuk sarapan.</p>

                    <div class="flex items-center justify-between mb-3 md:mb-4">
                        <div class="text-lg font-bold text-red-500">Rp 32.000</div>
                    </div>

                    <button class="w-full action-btn bg-gray-400 text-white text-center justify-center text-xs md:text-sm cursor-not-allowed" disabled>
                        <i class="fas fa-times"></i> Habis
                    </button>

                    <a href="#" class="mt-2 block w-full action-btn btn-outline text-center justify-center text-xs md:text-sm">
                        <i class="fas fa-eye"></i> Detail
                    </a>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card group">
                <div class="relative">
                    <img 
                        src="https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=80" 
                        alt="Pizza Margherita" 
                        class="w-full h-40 md:h-48 object-cover group-hover:scale-105 transition-transform duration-300"
                    >
                    
                    <div class="stock-badge in-stock">
                        <i class="fas fa-check mr-1"></i> Stok: 12
                    </div>

                    <div class="seller-badge">
                        <i class="fas fa-store mr-1"></i> Pizzeria Italiana
                    </div>
                </div>

                <div class="p-4 md:p-5">
                    <h3 class="font-bold text-base md:text-lg text-gray-800 mb-2 line-clamp-2">Pizza Margherita Autentik Italia</h3>
                    <p class="text-gray-600 text-xs md:text-sm mb-3 md:mb-4 line-clamp-2">Pizza dengan saus tomat segar, mozzarella, dan daun basil. Dipanggang dalam oven kayu.</p>

                    <div class="flex items-center justify-between mb-3 md:mb-4">
                        <div class="text-lg font-bold text-red-500">Rp 65.000</div>
                    </div>

                    <form action="#" method="POST" class="space-y-3">
                        <div class="quantity-controls">
                            <button type="button" class="decrease-qty">−</button>
                            <input type="number" name="quantity" value="1" min="1" max="12">
                            <button type="button" class="increase-qty">+</button>
                        </div>
                        <button class="w-full action-btn btn-cart text-xs md:text-sm">
                            <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                        </button>
                    </form>

                    <a href="#" class="mt-2 block w-full action-btn btn-outline text-center text-xs md:text-sm">
                        <i class="fas fa-eye"></i> Detail
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // JS untuk tombol + dan −
        document.querySelectorAll('.increase-qty').forEach(btn => {
            btn.addEventListener('click', () => {
                const input = btn.parentElement.querySelector('input[name="quantity"]');
                const max = parseInt(input.max);
                let val = parseInt(input.value);
                if (val < max) input.value = val + 1;
            });
        });

        document.querySelectorAll('.decrease-qty').forEach(btn => {
            btn.addEventListener('click', () => {
                const input = btn.parentElement.querySelector('input[name="quantity"]');
                let val = parseInt(input.value);
                if (val > 1) input.value = val - 1;
            });
        });
    </script>
</body>
</html>