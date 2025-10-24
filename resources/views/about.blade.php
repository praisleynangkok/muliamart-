<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Mulia Mart</title>
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
        
        .about-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 24px;
            box-shadow: var(--shadow);
            overflow: hidden;
            position: relative;
        }
        
        .about-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
        }
        
        .feature-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border-left: 4px solid transparent;
            height: 100%;
        }
        
        .feature-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .feature-card.primary {
            border-left-color: var(--primary);
        }
        
        .feature-card.secondary {
            border-left-color: var(--secondary);
        }
        
        .feature-card.accent {
            border-left-color: var(--accent);
        }
        
        .mission-item {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            border-radius: 12px;
            padding: 20px;
            transition: var(--transition);
        }
        
        .mission-item:hover {
            background: linear-gradient(135deg, var(--primary), #e76f51);
            color: white;
            transform: translateX(8px);
        }
        
        .mission-item:hover .mission-icon {
            background: white;
            color: var(--primary);
        }
        
        .mission-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            background: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            transition: var(--transition);
        }
        
        .team-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            text-align: center;
            box-shadow: var(--shadow);
            transition: var(--transition);
        }
        
        .team-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .team-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            font-weight: bold;
        }
        
        .stat-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            text-align: center;
            box-shadow: var(--shadow);
            border-top: 4px solid var(--primary);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .floating-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
            z-index: 0;
        }
        
        .shape-1 {
            width: 200px;
            height: 200px;
            background: var(--primary);
            top: -50px;
            right: -50px;
        }
        
        .shape-2 {
            width: 150px;
            height: 150px;
            background: var(--accent);
            bottom: -30px;
            left: -30px;
        }
    </style>
</head>
<body class="py-8">
    <div class="max-w-6xl mx-auto px-4">
        <!-- About Container -->
        <div class="about-container p-8 md:p-12 relative overflow-hidden">
            <!-- Floating Shapes -->
            <div class="floating-shape shape-1"></div>
            <div class="floating-shape shape-2"></div>
            
            <!-- Header Section -->
            <div class="text-center mb-12 relative z-10">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                    Tentang <span class="gradient-text">Mulia Mart</span>
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-orange-500 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                    Platform e-commerce inovatif yang didedikasikan untuk memberdayakan pelaku UMKM 
                    dalam memasarkan produk mereka secara digital dengan mudah dan efektif.
                </p>
            </div>

            <!-- Main Content -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-16 relative z-10">
                <!-- Vision Section -->
                <div>
                    <div class="feature-card primary">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mb-6">
                            <i class="fas fa-bullseye text-2xl text-red-500"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Visi Kami</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Menjadi platform terdepan dalam mendigitalisasi UMKM Indonesia, 
                            menciptakan ekosistem yang memungkinkan setiap pelaku usaha kecil 
                            dan menengah tumbuh dan bersaing di era digital.
                        </p>
                    </div>
                </div>

                <!-- Mission Section -->
                <div>
                    <div class="feature-card accent">
                        <div class="w-16 h-16 bg-teal-100 rounded-full flex items-center justify-center mb-6">
                            <i class="fas fa-flag text-2xl text-teal-500"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Misi Kami</h3>
                        <div class="space-y-4">
                            <div class="mission-item flex items-start gap-4">
                                <div class="mission-icon">
                                    <i class="fas fa-globe"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">Akses Global</h4>
                                    <p class="text-sm">Memperluas jangkauan pasar UMKM hingga tingkat nasional</p>
                                </div>
                            </div>
                            <div class="mission-item flex items-start gap-4">
                                <div class="mission-icon">
                                    <i class="fas fa-chart-line"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">Pertumbuhan Berkelanjutan</h4>
                                    <p class="text-sm">Mendorong pertumbuhan bisnis yang stabil dan berkelanjutan</p>
                                </div>
                            </div>
                            <div class="mission-item flex items-start gap-4">
                                <div class="mission-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold mb-1">Komunitas Kuat</h4>
                                    <p class="text-sm">Membangun komunitas UMKM yang saling mendukung</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16 relative z-10">
                <div class="stat-card">
                    <div class="text-3xl font-bold text-red-500 mb-2">500+</div>
                    <p class="text-gray-600 font-semibold">UMKM Terdaftar</p>
                </div>
                <div class="stat-card">
                    <div class="text-3xl font-bold text-orange-500 mb-2">1.2K+</div>
                    <p class="text-gray-600 font-semibold">Produk Aktif</p>
                </div>
                <div class="stat-card">
                    <div class="text-3xl font-bold text-teal-500 mb-2">50K+</div>
                    <p class="text-gray-600 font-semibold">Transaksi</p>
                </div>
                <div class="stat-card">
                    <div class="text-3xl font-bold text-purple-500 mb-2">95%</div>
                    <p class="text-gray-600 font-semibold">Kepuasan Pelanggan</p>
                </div>
            </div>

            <!-- Features Section -->
            <div class="mb-16 relative z-10">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Mengapa Memilih Mulia Mart?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="feature-card secondary text-center">
                        <div class="w-20 h-20 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-user-shield text-3xl text-orange-500"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Sistem Login Terintegrasi</h3>
                        <p class="text-gray-600">
                            Setiap pengguna memiliki akses personal untuk mengelola produk mereka 
                            dengan aman dan terorganisir.
                        </p>
                    </div>
                    
                    <div class="feature-card primary text-center">
                        <div class="w-20 h-20 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-user-cog text-3xl text-red-500"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Kontrol Superadmin</h3>
                        <p class="text-gray-600">
                            Manajemen menyeluruh dengan kontrol superadmin yang memastikan 
                            platform berjalan optimal untuk semua pihak.
                        </p>
                    </div>
                    
                    <div class="feature-card accent text-center">
                        <div class="w-20 h-20 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <i class="fas fa-chart-bar text-3xl text-teal-500"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Analitik Lengkap</h3>
                        <p class="text-gray-600">
                            Fitur analitik canggih membantu UMKM memahami performa penjualan 
                            dan mengambil keputusan bisnis yang tepat.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Team Section -->
            <div class="relative z-10">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Tim Kami</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="team-card">
                        <div class="team-avatar">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Ahmad Wijaya</h3>
                        <p class="text-red-500 font-semibold mb-3">Founder & CEO</p>
                        <p class="text-gray-600 text-sm">
                            Berpengalaman 10+ tahun dalam pengembangan bisnis digital 
                            dan pemberdayaan UMKM.
                        </p>
                    </div>
                    
                    <div class="team-card">
                        <div class="team-avatar">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Sarah Putri</h3>
                        <p class="text-red-500 font-semibold mb-3">CTO</p>
                        <p class="text-gray-600 text-sm">
                            Ahli teknologi dengan spesialisasi dalam pengembangan 
                            platform e-commerce yang scalable.
                        </p>
                    </div>
                    
                    <div class="team-card">
                        <div class="team-avatar">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Budi Santoso</h3>
                        <p class="text-red-500 font-semibold mb-3">Head of UMKM Relations</p>
                        <p class="text-gray-600 text-sm">
                            Dedikasi tinggi dalam membangun hubungan dan memahami 
                            kebutuhan pelaku UMKM.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center mt-16 relative z-10">
                <div class="bg-gradient-to-r from-red-500 to-orange-500 rounded-2xl p-8 text-white">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">
                        Bergabunglah dengan Komunitas UMKM Mulia Mart
                    </h2>
                    <p class="text-white/90 mb-6 max-w-2xl mx-auto">
                        Mari bersama-sama membangun ekosistem digital yang memberdayakan 
                        setiap pelaku usaha kecil dan menengah di Indonesia.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/register" class="bg-white text-red-500 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors">
                            Daftar Sekarang
                        </a>
                        <a href="/contact" class="border-2 border-white text-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-red-500 transition-colors">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Values Section -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
            <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-red-500">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-red-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-heart text-red-500 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Passion</h4>
                        <p class="text-gray-600 text-sm">Semangat memberdayakan UMKM</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-orange-500">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-orange-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-handshake text-orange-500 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Integrity</h4>
                        <p class="text-gray-600 text-sm">Transparansi dan kejujuran</p>
                    </div>
                </div>
            </div>
            
            <div class="bg-white rounded-xl p-6 shadow-sm border-l-4 border-teal-500">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-teal-100 rounded-full flex items-center justify-center">
                        <i class="fas fa-rocket text-teal-500 text-xl"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Innovation</h4>
                        <p class="text-gray-600 text-sm">Terus berinovasi untuk UMKM</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const featureCards = document.querySelectorAll('.feature-card, .team-card, .stat-card');
            
            featureCards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                
                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, index * 200);
            });

            // Add hover effects
            const missionItems = document.querySelectorAll('.mission-item');
            missionItems.forEach(item => {
                item.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateX(8px)';
                });
                item.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateX(0)';
                });
            });
        });
    </script>
</body>
</html>