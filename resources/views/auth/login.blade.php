<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mulia Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #fef6e4 0%, #f8edeb 100%);
        }
        
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
        }
        
        .login-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #e63946, #f4a261, #2a9d8f);
        }
        
        .form-input {
            transition: all 0.3s ease;
            border: 2px solid #e2e8f0;
        }
        
        .form-input:focus {
            border-color: #e63946;
            box-shadow: 0 0 0 3px rgba(230, 57, 70, 0.1);
        }
        
        .btn-login {
            background: linear-gradient(135deg, #e63946, #e76f51);
            transition: all 0.3s ease;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(230, 57, 70, 0.3);
        }
        
        .floating-icon {
            position: absolute;
            font-size: 24px;
            color: #e63946;
            opacity: 0.7;
        }
        
        .food-icon-1 {
            top: 10%;
            left: 10%;
            animation: float 6s ease-in-out infinite;
        }
        
        .food-icon-2 {
            top: 60%;
            right: 10%;
            animation: float 6s ease-in-out infinite 2s;
        }
        
        .food-icon-3 {
            bottom: 20%;
            left: 15%;
            animation: float 6s ease-in-out infinite 4s;
        }
        
        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-15px);
            }
            100% {
                transform: translateY(0px);
            }
        }
    </style>
</head>
<body class="flex justify-center items-center min-h-screen">
    <!-- Icons floating in the background -->
    <i class="fas fa-bread-slice floating-icon food-icon-1"></i>
    <i class="fas fa-cookie floating-icon food-icon-2"></i>
    <i class="fas fa-cheese floating-icon food-icon-3"></i>
    
    <div class="login-container p-8 w-96">
        <div class="text-center mb-8">
            <div class="flex justify-center items-center mb-4">
                <i class="fas fa-utensils text-3xl text-red-500 mr-2"></i>
                <h1 class="text-2xl font-bold text-gray-800">Mulia Mart</h1>
            </div>
            <h2 class="text-2xl font-bold text-gray-800">Masuk ke Akun Anda</h2>
            <p class="text-gray-600 mt-2">Selamat datang kembali di UMKM Mulia Mart</p>
        </div>

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4 flex items-center">
                <i class="fas fa-exclamation-circle mr-2"></i>
                <span>{{ session('error') }}</span>
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label class="block text-gray-700 mb-2 font-medium">Email</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-envelope text-gray-400"></i>
                    </div>
                    <input type="email" name="email" required 
                           class="form-input w-full pl-10 pr-4 py-3 rounded-lg focus:outline-none" 
                           placeholder="alamat@email.com">
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 mb-2 font-medium">Password</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i class="fas fa-lock text-gray-400"></i>
                    </div>
                    <input type="password" name="password" required 
                           class="form-input w-full pl-10 pr-4 py-3 rounded-lg focus:outline-none" 
                           placeholder="Masukkan password">
                </div>
            </div>
            <button class="btn-login text-white w-full py-3 rounded-lg font-semibold flex items-center justify-center">
                <i class="fas fa-sign-in-alt mr-2"></i>
                Masuk
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-gray-600">Belum punya akun? 
                <a href="{{ route('register') }}" class="text-red-500 font-semibold hover:text-red-600 transition-colors">
                    Daftar Sekarang
                </a>
            </p>
        </div>
        
        <div class="mt-8 pt-6 border-t border-gray-200 text-center">
            <p class="text-gray-500 text-sm">© 2023 Mulia Mart. Seluruh hak cipta dilindungi.</p>
        </div>
    </div>
</body>
</html>