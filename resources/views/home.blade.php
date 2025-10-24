<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mulia Mart - UMKM Makanan Berkualitas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
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
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #fef6e4 0%, #f8edeb 100%);
            color: #333;
            line-height: 1.6;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header & Navigation */
        header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: var(--transition);
        }
        
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .logo-icon {
            color: var(--primary);
            font-size: 28px;
        }
        
        .logo-text {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary);
            letter-spacing: 1px;
        }
        
        .nav-links {
            display: flex;
            gap: 30px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            position: relative;
            transition: var(--transition);
        }
        
        .nav-links a:after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary);
            transition: var(--transition);
        }
        
        .nav-links a:hover {
            color: var(--primary);
        }
        
        .nav-links a:hover:after {
            width: 100%;
        }
        
        .auth-buttons {
            display: flex;
            gap: 15px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 28px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
            border: none;
            font-size: 15px;
            text-align: center;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #e76f51);
            color: white;
            box-shadow: var(--shadow);
        }
        
        .btn-primary:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(230, 57, 70, 0.3);
        }
        
        .btn-outline {
            background: transparent;
            color: var(--dark);
            border: 2px solid var(--dark);
        }
        
        .btn-outline:hover {
            background: var(--dark);
            color: white;
            transform: translateY(-5px);
        }

        .btn-success {
            background: linear-gradient(135deg, var(--accent), #2a9d8f);
            color: white;
            box-shadow: var(--shadow);
        }

        .btn-success:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 25px rgba(42, 157, 143, 0.3);
        }

        /* User Menu */
        .user-menu {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), #e76f51);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }
        
        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            padding: 120px 0 80px;
            overflow: hidden;
        }
        
        .hero-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            width: 100%;
        }
        
        .hero-content {
            z-index: 2;
            animation: fadeInUp 1s ease-out;
        }
        
        .hero-title {
            font-size: 3.5rem;
            line-height: 1.2;
            margin-bottom: 24px;
            color: var(--dark);
        }
        
        .hero-title span {
            color: var(--primary);
            position: relative;
        }
        
        .hero-title span:after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 0;
            width: 100%;
            height: 10px;
            background: rgba(230, 57, 70, 0.2);
            z-index: -1;
        }
        
        .hero-description {
            font-size: 1.2rem;
            margin-bottom: 32px;
            color: #555;
            line-height: 1.8;
        }
        
        .hero-buttons {
            display: flex;
            gap: 20px;
        }
        
        .hero-visual {
            position: relative;
            height: 500px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .hero-background {
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #ffddd2, #e9c46a);
            border-radius: 30px;
            box-shadow: var(--shadow);
        }
        
        /* Floating Cards */
        .floating-cards-container {
            position: relative;
            width: 100%;
            height: 100%;
        }
        
        .floating-card {
            position: absolute;
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: var(--shadow);
            animation: float 6s ease-in-out infinite;
            text-align: center;
            width: 160px;
            z-index: 10;
        }
        
        .card-1 {
            top: 10%;
            left: 5%;
            animation-delay: 0s;
        }
        
        .card-2 {
            bottom: 10%;
            right: 5%;
            animation-delay: 2s;
        }
        
        .card-3 {
            top: 40%;
            right: 15%;
            animation-delay: 4s;
        }
        
        .food-icon {
            font-size: 30px;
            color: var(--primary);
            margin-bottom: 10px;
        }

        /* Features Section */
        .features {
            padding: 100px 0;
            background: white;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 60px;
            color: var(--dark);
            position: relative;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--primary);
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .feature-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .feature-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        .feature-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .feature-icon {
            font-size: 50px;
            color: var(--primary);
            margin-bottom: 20px;
        }

        .feature-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: var(--dark);
        }

        /* Products Section */
        .products {
            padding: 100px 0;
            background: #f8f9fa;
        }

        /* Product Grid */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            text-decoration: none;
            color: inherit;
            display: block;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .product-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
            transition: var(--transition);
        }

        .product-card:hover .product-image {
            transform: scale(1.05);
        }

        .product-content {
            padding: 25px;
        }

        .product-name {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--dark);
        }

        .product-description {
            color: #666;
            font-size: 0.95rem;
            margin-bottom: 15px;
            line-height: 1.5;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .product-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .product-stock {
            font-size: 0.9rem;
            color: #7f8c8d;
        }

        .best-seller-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, var(--primary), #e76f51);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(230, 57, 70, 0.3);
        }
        
        .new-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, var(--accent), #2a9d8f);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(42, 157, 143, 0.3);
        }

        /* Action Buttons */
        .action-buttons {
            display: flex;
            gap: 10px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #f0f0f0;
        }

        .action-btn {
            flex: 1;
            padding: 8px 12px;
            border-radius: 8px;
            font-size: 0.85rem;
            font-weight: 500;
            text-align: center;
            transition: var(--transition);
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .edit-btn {
            background: rgba(42, 157, 143, 0.1);
            color: var(--accent);
            border: 1px solid var(--accent);
        }

        .edit-btn:hover {
            background: var(--accent);
            color: white;
        }

        .delete-btn {
            background: rgba(231, 76, 60, 0.1);
            color: var(--danger);
            border: 1px solid var(--danger);
        }

        .delete-btn:hover {
            background: var(--danger);
            color: white;
        }

        /* Success Message */
        .alert-success {
            background: rgba(39, 174, 96, 0.1);
            border: 1px solid var(--success);
            color: var(--success);
            padding: 15px 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* CTA Section */
        .cta {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--dark), #2a9d8f);
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-content {
            position: relative;
            z-index: 2;
            max-width: 700px;
            margin: 0 auto;
        }

        .cta-title {
            font-size: 2.8rem;
            margin-bottom: 20px;
        }

        .cta-description {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 70px 0 30px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-column h3 {
            font-size: 1.5rem;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background: var(--primary);
        }

        .footer-links {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 12px;
        }

        .footer-links a {
            color: #bbb;
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary);
            padding-left: 5px;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            color: white;
            transition: var(--transition);
            text-decoration: none;
        }

        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-5px);
        }

        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #bbb;
            font-size: 0.9rem;
        }

        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
            100% {
                transform: translateY(0px);
            }
        }
        
        /* Responsive */
        @media (max-width: 992px) {
            .hero-container {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }
            
            .hero-visual {
                height: 400px;
                order: -1;
            }
            
            .hero-title {
                font-size: 2.8rem;
            }
            
            .hero-buttons {
                justify-content: center;
            }
            
            .nav-links {
                display: none;
            }
            
            .floating-card {
                width: 140px;
                padding: 15px;
            }
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .auth-buttons {
                flex-direction: column;
                gap: 10px;
            }
            
            .card-3 {
                display: none;
            }
            
            .hero-visual {
                height: 300px;
            }

            .product-grid {
                grid-template-columns: 1fr;
            }

            .cta-title {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 480px) {
            .hero-title {
                font-size: 1.8rem;
            }
            
            .hero-description {
                font-size: 1rem;
            }
            
            .floating-card {
                width: 120px;
                padding: 12px;
                font-size: 0.9rem;
            }
            
            .card-2 {
                display: none;
            }

            .cta-title {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <a href="/" class="flex items-center gap-2 no-underline">
                    <i class="fas fa-utensils logo-icon"></i>
                    <span class="logo-text">Mulia Mart</span>
                </a>
            </div>
            <nav class="nav-links">
                <a href="/">Beranda</a>
                <a href="#products">Produk</a>
                <a href="/products">Menu</a>
                <a href="/about">Tentang Kami</a>
                <a href="/contact">Kontak</a>
            </nav>
            
            <!-- User Menu (tampil setelah login) -->
            <div class="user-menu" id="userMenu" style="display: none;">
                <div class="user-info">
                    <div class="user-avatar">U</div>
                    <span>User</span>
                </div>
                <a href="/products/create" class="btn btn-primary">+ Tambah Produk</a>
                <form method="POST" action="/logout" class="m-0">
                    @csrf
                    <button type="submit" class="btn btn-outline">Logout</button>
                </form>
            </div>
            
            <!-- Auth Buttons (tampil sebelum login) -->
            <div class="auth-buttons" id="authButtons">
                <a href="/login" class="btn btn-outline">Login</a>
                <a href="/register" class="btn btn-primary">Register</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-container">
            <div class="hero-content">
                <h1 class="hero-title">Rasa <span>Autentik</span> dalam Setiap Gigitan</h1>
                <p class="hero-description">Nikmati kelezatan produk makanan UMKM berkualitas dengan cita rasa tradisional dan bahan-bahan pilihan terbaik. Dari dapur kami langsung ke meja Anda.</p>
                <div class="hero-buttons">
                    <a href="#products" class="btn btn-primary">Pesan Sekarang</a>
                    <a href="/products" class="btn btn-outline">Lihat Menu</a>
                </div>
            </div>
            
            <div class="hero-visual">
                <div class="hero-background"></div>
                <div class="floating-cards-container">
                    <a href="/products?category=roti" class="floating-card card-1 no-underline text-current">
                        <i class="fas fa-bread-slice food-icon"></i>
                        <h3>Roti Segar</h3>
                        <p>Dibuat setiap pagi</p>
                    </a>
                    <a href="/products?category=kue" class="floating-card card-2 no-underline text-current">
                        <i class="fas fa-cookie food-icon"></i>
                        <h3>Kue Kering</h3>
                        <p>Renyah dan lezat</p>
                    </a>
                    <a href="/products?category=snack" class="floating-card card-3 no-underline text-current">
                        <i class="fas fa-cheese food-icon"></i>
                        <h3>Snack Gurih</h3>
                        <p>Camilan sehat</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="section-title">Keunggulan Produk Kami</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <i class="fas fa-leaf feature-icon"></i>
                    <h3 class="feature-title">Bahan Alami</h3>
                    <p>Kami menggunakan bahan-bahan alami pilihan tanpa pengawet untuk menjaga kualitas dan rasa autentik.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-clock feature-icon"></i>
                    <h3 class="feature-title">Segar Setiap Hari</h3>
                    <p>Produk kami dibuat fresh setiap hari dengan proses yang higienis dan standar kualitas terbaik.</p>
                </div>
                <div class="feature-card">
                    <i class="fas fa-truck feature-icon"></i>
                    <h3 class="feature-title">Pengiriman Cepat</h3>
                    <p>Pesanan Anda akan sampai dengan cepat dan dalam kondisi terbaik berkat kemasan khusus kami.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section class="products" id="products">
        <div class="container">
            <h2 class="section-title">Produk Unggulan Kami</h2>

            <!-- Success Message -->
            @if(session('success'))
                <div class="alert-success">
                    <i class="fas fa-check-circle"></i>
                    {{ session('success') }}
                </div>
            @endif

            <!-- Product Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                @foreach ($products as $product)
                    <a href="{{ route('products.show', $product->id) }}" class="bg-white shadow rounded-lg overflow-hidden hover:shadow-lg transition duration-300 block">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                        @else
                            <div class="w-full h-48 bg-gray-200 flex items-center justify-center">
                                <i class="fas fa-image text-gray-400 text-3xl"></i>
                            </div>
                        @endif
                        <div class="p-4">
                            <h2 class="text-lg font-semibold text-gray-800">{{ $product->name }}</h2>
                            <p class="text-gray-600 text-sm truncate">{{ $product->description }}</p>
                            <p class="mt-2 font-bold text-purple-700">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                            <p class="text-sm text-gray-500 mt-1">Stok: {{ $product->stock }}</p>
                            
                            <!-- Action Buttons untuk pemilik produk -->
                            @if(Auth::check() && (Auth::id() == $product->user_id || Auth::user()->role == 'admin'))
                                <div class="action-buttons">
                                    <a href="{{ route('products.edit', $product->id) }}" class="action-btn edit-btn">
                                        <i class="fas fa-edit mr-1"></i> Edit
                                    </a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline m-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="action-btn delete-btn" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                            <i class="fas fa-trash mr-1"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>

            <!-- Empty State -->
            @if($products->isEmpty())
                <div class="text-center py-12">
                    <i class="fas fa-box-open text-4xl text-gray-400 mb-4"></i>
                    <h3 class="text-xl font-semibold text-gray-600 mb-2">Belum ada produk</h3>
                    <p class="text-gray-500 mb-6">Mulai tambahkan produk pertama Anda</p>
                    <a href="/products/create" class="btn btn-primary">
                        <i class="fas fa-plus mr-2"></i> Tambah Produk Pertama
                    </a>
                </div>
            @endif
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Siap Menikmati Kelezatan Kami?</h2>
                <p class="cta-description">Bergabunglah dengan ribuan pelanggan yang telah merasakan kelezatan produk Mulia Mart. Pesan sekarang dan dapatkan promo spesial!</p>
                <div class="flex justify-center gap-4 mt-8">
                    <a href="/register" class="btn btn-success">Daftar Sekarang</a>
                    <a href="/login" class="btn btn-outline" style="color: white; border-color: white;">Masuk</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Mulia Mart</h3>
                    <p>UMKM makanan berkualitas dengan cita rasa autentik dan bahan-bahan pilihan terbaik.</p>
                    <div class="social-links">
                        <a href="https://instagram.com/muliamart" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://facebook.com/muliamart" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="https://wa.me/6281234567890" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://tiktok.com/@muliamart" target="_blank"><i class="fab fa-tiktok"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Menu Cepat</h3>
                    <ul class="footer-links">
                        <li><a href="/">Beranda</a></li>
                        <li><a href="#products">Produk</a></li>
                        <li><a href="/about">Tentang Kami</a></li>
                        <li><a href="/contact">Kontak</a></li>
                        <li><a href="/blog">Blog</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Kategori Produk</h3>
                    <ul class="footer-links">
                        <li><a href="/products?category=roti">Roti & Kue Basah</a></li>
                        <li><a href="/products?category=kue">Kue Kering</a></li>
                        <li><a href="/products?category=snack">Snack & Camilan</a></li>
                        <li><a href="/products?category=beku">Makanan Beku</a></li>
                        <li><a href="/products?category=minuman">Minuman</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Kontak Kami</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt mr-2"></i> Jl. Kuliner No. 123, Jakarta</li>
                        <li><a href="tel:+6281234567890"><i class="fas fa-phone mr-2"></i> +62 812-3456-7890</a></li>
                        <li><a href="mailto:info@muliamart.com"><i class="fas fa-envelope mr-2"></i> info@muliamart.com</a></li>
                        <li><i class="fas fa-clock mr-2"></i> Buka Setiap Hari 08:00 - 20:00</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 Mulia Mart. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simulasi status login (ganti dengan logika backend)
        const isLoggedIn = false; // Ubah ke true untuk melihat tampilan user yang sudah login
        
        if (isLoggedIn) {
            document.getElementById('userMenu').style.display = 'flex';
            document.getElementById('authButtons').style.display = 'none';
        }

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.98)';
                header.style.boxShadow = '0 5px 20px rgba(0,0,0,0.1)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.boxShadow = '0 5px 20px rgba(0,0,0,0.05)';
            }
        });

        // Smooth scroll untuk anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>