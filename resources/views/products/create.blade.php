<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk - Mulia Mart</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #e63946;
            --secondary: #f4a261;
            --accent: #2a9d8f;
            --light: #f8f9fa;
            --dark: #264653;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #fef6e4 0%, #f8edeb 100%);
            min-height: 100vh;
        }
        
        .form-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
        }
        
        .form-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
        }
        
        .form-input {
            transition: all 0.3s ease;
            border: 2px solid #e2e8f0;
        }
        
        .form-input:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(230, 57, 70, 0.1);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary), #e76f51);
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 7px 14px rgba(230, 57, 70, 0.3);
        }
        
        .file-upload {
            border: 2px dashed #cbd5e0;
            transition: all 0.3s ease;
        }
        
        .file-upload:hover {
            border-color: var(--primary);
            background: rgba(230, 57, 70, 0.05);
        }
        
        .preview-image {
            max-height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen py-8">
    <div class="form-container w-full max-w-2xl p-8">
        <div class="text-center mb-8">
            <div class="flex justify-center items-center mb-4">
                <i class="fas fa-utensils text-3xl text-red-500 mr-2"></i>
                <h1 class="text-2xl font-bold text-gray-800">Mulia Mart</h1>
            </div>
            <h2 class="text-3xl font-bold text-gray-800 mb-2">Tambah Produk Baru</h2>
            <p class="text-gray-600">Isi form berikut untuk menambahkan produk makanan baru</p>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6 flex items-center">
                <i class="fas fa-check-circle mr-2"></i>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            
            <!-- Nama Produk -->
            <div>
                <label class="block text-gray-700 mb-2 font-semibold">
                    <i class="fas fa-tag mr-2 text-red-500"></i>
                    Nama Produk
                </label>
                <input type="text" name="name" required 
                       class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" 
                       placeholder="Contoh: Roti Maryam Special"
                       value="{{ old('name') }}">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Harga -->
            <div>
                <label class="block text-gray-700 mb-2 font-semibold">
                    <i class="fas fa-money-bill-wave mr-2 text-green-500"></i>
                    Harga (Rp)
                </label>
                <input type="number" name="price" required 
                       class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" 
                       placeholder="Contoh: 25000"
                       value="{{ old('price') }}">
                @error('price')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Stok -->
            <div>
                <label class="block text-gray-700 mb-2 font-semibold">
                    <i class="fas fa-boxes mr-2 text-blue-500"></i>
                    Stok
                </label>
                <input type="number" name="stock" required 
                       class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" 
                       placeholder="Contoh: 50"
                       value="{{ old('stock') }}">
                @error('stock')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Deskripsi -->
            <div>
                <label class="block text-gray-700 mb-2 font-semibold">
                    <i class="fas fa-file-alt mr-2 text-purple-500"></i>
                    Deskripsi Produk
                </label>
                <textarea name="description" rows="4" 
                          class="form-input w-full px-4 py-3 rounded-lg focus:outline-none" 
                          placeholder="Deskripsikan produk makanan Anda...">{{ old('description') }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Upload Gambar -->
            <div>
                <label class="block text-gray-700 mb-2 font-semibold">
                    <i class="fas fa-image mr-2 text-yellow-500"></i>
                    Gambar Produk
                </label>
                <div class="file-upload border-2 border-dashed rounded-lg p-6 text-center cursor-pointer" 
                     onclick="document.getElementById('image').click()">
                    <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                    <p class="text-gray-600">Klik untuk upload gambar produk</p>
                    <p class="text-sm text-gray-500">Format: JPG, PNG, JPEG (Max: 2MB)</p>
                    <input type="file" id="image" name="image" class="hidden" accept="image/*" onchange="previewImage(this)">
                </div>
                @error('image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                
                <!-- Image Preview -->
                <div id="imagePreview" class="mt-4 hidden">
                    <img id="preview" class="preview-image mx-auto" src="" alt="Preview Gambar">
                </div>
            </div>

            <!-- Kategori -->
            <div>
                <label class="block text-gray-700 mb-2 font-semibold">
                    <i class="fas fa-list mr-2 text-teal-500"></i>
                    Kategori
                </label>
                <select name="category" class="form-input w-full px-4 py-3 rounded-lg focus:outline-none">
                    <option value="">Pilih Kategori</option>
                    <option value="roti" {{ old('category') == 'roti' ? 'selected' : '' }}>Roti & Kue Basah</option>
                    <option value="kue_kering" {{ old('category') == 'kue_kering' ? 'selected' : '' }}>Kue Kering</option>
                    <option value="snack" {{ old('category') == 'snack' ? 'selected' : '' }}>Snack & Camilan</option>
                    <option value="makanan_beku" {{ old('category') == 'makanan_beku' ? 'selected' : '' }}>Makanan Beku</option>
                    <option value="minuman" {{ old('category') == 'minuman' ? 'selected' : '' }}>Minuman</option>
                </select>
                @error('category')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Button Group -->
            <div class="flex gap-4 pt-4">
                <button type="submit" class="btn-primary text-white w-full py-3 rounded-lg font-semibold flex items-center justify-center">
                    <i class="fas fa-plus-circle mr-2"></i>
                    Tambah Produk
                </button>
                <a href="{{ route('products.index') }}" class="bg-gray-500 text-white w-full py-3 rounded-lg font-semibold flex items-center justify-center hover:bg-gray-600 transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Kembali
                </a>
            </div>
        </form>
    </div>

    <script>
        function previewImage(input) {
            const preview = document.getElementById('preview');
            const previewContainer = document.getElementById('imagePreview');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                }
                
                reader.readAsDataURL(input.files[0]);
            }
        }

        // Format price input
        document.querySelector('input[name="price"]').addEventListener('input', function(e) {
            // Remove non-numeric characters
            let value = e.target.value.replace(/\D/g, '');
            e.target.value = value;
        });
    </script>
</body>
</html>