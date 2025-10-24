<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Mulia Mart</title>
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
        
        .contact-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 24px;
            box-shadow: var(--shadow);
            overflow: hidden;
            position: relative;
        }
        
        .contact-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
        }
        
        .contact-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            border-left: 4px solid transparent;
            height: 100%;
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        
        .contact-card.primary {
            border-left-color: var(--primary);
        }
        
        .contact-card.secondary {
            border-left-color: var(--secondary);
        }
        
        .contact-card.accent {
            border-left-color: var(--accent);
        }
        
        .form-input {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 14px 16px;
            font-size: 16px;
            transition: var(--transition);
            width: 100%;
        }
        
        .form-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(230, 57, 70, 0.1);
            outline: none;
        }
        
        .form-label {
            color: #374151;
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #e76f51);
            color: white;
            padding: 14px 32px;
            border-radius: 12px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(230, 57, 70, 0.3);
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        
        .floating-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
            z-index: 0;
        }
        
        .shape-1 {
            width: 150px;
            height: 150px;
            background: var(--primary);
            top: -30px;
            right: -30px;
        }
        
        .shape-2 {
            width: 100px;
            height: 100px;
            background: var(--accent);
            bottom: -20px;
            left: -20px;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, var(--primary), var(--accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="py-8">
    <div class="max-w-6xl mx-auto px-4">
        <!-- Contact Container -->
        <div class="contact-container p-8 md:p-12 relative overflow-hidden">
            <!-- Floating Shapes -->
            <div class="floating-shape shape-1"></div>
            <div class="floating-shape shape-2"></div>
            
            <!-- Header Section -->
            <div class="text-center mb-12 relative z-10">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-800 mb-6">
                    Hubungi <span class="gradient-text">Mulia Mart</span>
                </h1>
                <div class="w-24 h-1 bg-gradient-to-r from-red-500 to-orange-500 mx-auto mb-6"></div>
                <p class="text-xl text-gray-600 leading-relaxed max-w-3xl mx-auto">
                    Tim support kami siap membantu menjawab semua pertanyaan Anda. 
                    Jangan ragu untuk menghubungi kami melalui berbagai cara di bawah ini.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 relative z-10">
                <!-- Contact Information -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-8 flex items-center">
                        <i class="fas fa-info-circle mr-3 text-red-500"></i>
                        Informasi Kontak
                    </h2>
                    
                    <div class="space-y-6">
                        <!-- Phone -->
                        <div class="contact-card primary">
                            <div class="flex items-start gap-4">
                                <div class="contact-icon bg-red-100 text-red-500">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">Telepon & WhatsApp</h3>
                                    <p class="text-gray-600 mb-2">Hubungi kami untuk konsultasi cepat</p>
                                    <a href="tel:+6281234567890" class="text-red-500 font-semibold text-lg hover:text-red-600 transition-colors">
                                        <i class="fab fa-whatsapp mr-2"></i>
                                        +62 812-3456-7890
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="contact-card accent">
                            <div class="flex items-start gap-4">
                                <div class="contact-icon bg-teal-100 text-teal-500">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">Email</h3>
                                    <p class="text-gray-600 mb-2">Kirim pertanyaan detail via email</p>
                                    <a href="mailto:info@muliamart.com" class="text-teal-500 font-semibold text-lg hover:text-teal-600 transition-colors">
                                        <i class="fas fa-envelope mr-2"></i>
                                        info@muliamart.com
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Address -->
                        <div class="contact-card secondary">
                            <div class="flex items-start gap-4">
                                <div class="contact-icon bg-orange-100 text-orange-500">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h3 class="text-xl font-bold text-gray-800 mb-2">Alamat Kantor</h3>
                                    <p class="text-gray-600 mb-2">Kunjungi kantor kami</p>
                                    <p class="text-orange-500 font-semibold">
                                        <i class="fas fa-building mr-2"></i>
                                        Jl. Digital UMKM No. 123, Jakarta 12540
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Social Media -->
                    <div class="mt-8">
                        <h3 class="text-xl font-bold text-gray-800 mb-4">Ikuti Kami</h3>
                        <div class="flex gap-4">
                            <a href="#" class="w-12 h-12 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-blue-500 text-white rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors">
                                <i class="fab fa-facebook"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-blue-400 text-white rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="w-12 h-12 bg-red-400 text-white rounded-full flex items-center justify-center hover:bg-red-500 transition-colors">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 mb-8 flex items-center">
                        <i class="fas fa-paper-plane mr-3 text-red-500"></i>
                        Kirim Pesan
                    </h2>
                    
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        
                        <!-- Name Field -->
                        <div>
                            <label class="form-label">
                                <i class="fas fa-user mr-2 text-red-500"></i>
                                Nama Lengkap
                            </label>
                            <div class="relative">
                                <input 
                                    type="text" 
                                    name="name" 
                                    class="form-input pl-12"
                                    placeholder="Masukkan nama lengkap Anda"
                                    required
                                >
                                <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label class="form-label">
                                <i class="fas fa-envelope mr-2 text-red-500"></i>
                                Alamat Email
                            </label>
                            <div class="relative">
                                <input 
                                    type="email" 
                                    name="email" 
                                    class="form-input pl-12"
                                    placeholder="contoh@email.com"
                                    required
                                >
                                <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                    <i class="fas fa-envelope"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Subject Field -->
                        <div>
                            <label class="form-label">
                                <i class="fas fa-tag mr-2 text-red-500"></i>
                                Subjek Pesan
                            </label>
                            <div class="relative">
                                <select name="subject" class="form-input pl-12 appearance-none" required>
                                    <option value="">Pilih subjek pesan</option>
                                    <option value="general">Pertanyaan Umum</option>
                                    <option value="support">Bantuan Teknis</option>
                                    <option value="partnership">Kerjasama</option>
                                    <option value="complaint">Keluhan</option>
                                    <option value="suggestion">Saran</option>
                                </select>
                                <div class="absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                    <i class="fas fa-tag"></i>
                                </div>
                                <div class="absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-400">
                                    <i class="fas fa-chevron-down"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Message Field -->
                        <div>
                            <label class="form-label">
                                <i class="fas fa-comment-dots mr-2 text-red-500"></i>
                                Pesan Anda
                            </label>
                            <div class="relative">
                                <textarea 
                                    name="message" 
                                    rows="6" 
                                    class="form-input pl-12"
                                    placeholder="Tulis pesan detail Anda di sini..."
                                    required
                                ></textarea>
                                <div class="absolute left-4 top-4 text-gray-400">
                                    <i class="fas fa-comment-dots"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center pt-4">
                            <button type="submit" class="btn-primary">
                                <i class="fas fa-paper-plane"></i>
                                Kirim Pesan
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="mt-16 relative z-10">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Pertanyaan Umum</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                        <h3 class="font-bold text-gray-800 mb-2 flex items-center">
                            <i class="fas fa-question-circle mr-2 text-red-500"></i>
                            Bagaimana cara bergabung sebagai seller?
                        </h3>
                        <p class="text-gray-600 text-sm">
                            Daftar akun di website Mulia Mart, lengkapi profil toko, dan mulai upload produk Anda. Proses verifikasi membutuhkan 1-2 hari kerja.
                        </p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                        <h3 class="font-bold text-gray-800 mb-2 flex items-center">
                            <i class="fas fa-question-circle mr-2 text-red-500"></i>
                            Apakah ada biaya pendaftaran?
                        </h3>
                        <p class="text-gray-600 text-sm">
                            Tidak, pendaftaran sebagai seller di Mulia Mart sepenuhnya gratis. Kami hanya mengambil komisi dari setiap penjualan yang berhasil.
                        </p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                        <h3 class="font-bold text-gray-800 mb-2 flex items-center">
                            <i class="fas fa-question-circle mr-2 text-red-500"></i>
                            Bagaimana sistem pembayarannya?
                        </h3>
                        <p class="text-gray-600 text-sm">
                            Pembayaran dilakukan melalui transfer bank, e-wallet, atau COD. Dana akan ditransfer ke seller setelah order selesai.
                        </p>
                    </div>
                    
                    <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
                        <h3 class="font-bold text-gray-800 mb-2 flex items-center">
                            <i class="fas fa-question-circle mr-2 text-red-500"></i>
                            Berapa lama proses pengiriman?
                        </h3>
                        <p class="text-gray-600 text-sm">
                            Pengiriman biasanya memakan waktu 2-5 hari kerja tergantung lokasi. Kami bekerja sama dengan kurir terpercaya untuk pengiriman.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Support Hours -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
            <div class="bg-white rounded-xl p-6 text-center shadow-sm border-l-4 border-red-500">
                <i class="fas fa-clock text-3xl text-red-500 mb-3"></i>
                <h4 class="font-bold text-gray-800">Jam Operasional</h4>
                <p class="text-gray-600 text-sm">Senin - Minggu: 08:00 - 22:00 WIB</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 text-center shadow-sm border-l-4 border-green-500">
                <i class="fas fa-headset text-3xl text-green-500 mb-3"></i>
                <h4 class="font-bold text-gray-800">Response Time</h4>
                <p class="text-gray-600 text-sm">Rata-rata 2 jam pada jam operasional</p>
            </div>
            
            <div class="bg-white rounded-xl p-6 text-center shadow-sm border-l-4 border-blue-500">
                <i class="fas fa-language text-3xl text-blue-500 mb-3"></i>
                <h4 class="font-bold text-gray-800">Bahasa</h4>
                <p class="text-gray-600 text-sm">Melayani dalam Bahasa Indonesia & Inggris</p>
            </div>
        </div>
    </div>

    <script>
        // Add animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const contactCards = document.querySelectorAll('.contact-card');
            const formInputs = document.querySelectorAll('.form-input');
            
            // Animate contact cards
            contactCards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateX(-20px)';
                
                setTimeout(() => {
                    card.style.transition = 'all 0.6s ease';
                    card.style.opacity = '1';
                    card.style.transform = 'translateX(0)';
                }, index * 200);
            });

            // Add focus effects to form inputs
            formInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.classList.add('ring-2', 'ring-red-200', 'rounded-lg');
                });
                
                input.addEventListener('blur', function() {
                    this.parentElement.classList.remove('ring-2', 'ring-red-200', 'rounded-lg');
                });
            });
        });
    </script>
</body>
</html>