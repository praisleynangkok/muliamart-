<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mulia Mart')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-white shadow p-4 flex justify-between items-center">
        <h1 class="font-bold text-xl text-purple-600">🛍️ Mulia Mart</h1>
        <div>
            @auth
                <span class="mr-4">Halo, {{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button class="bg-red-500 text-white px-3 py-1 rounded">Logout</button>
                </form>
            @endauth
            @guest
                <a href="{{ route('login') }}" class="text-purple-600">Login</a>
            @endguest
        </div>
    </nav>
    <a href="{{ route('cart.index') }}" class="text-purple-600 font-semibold mr-4">Keranjang</a>
   @if (session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4 shadow-md transition duration-300">
        ✅ {{ session('success') }}
    </div>
@endif

@if (session('error'))
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4 shadow-md transition duration-300">
        ⚠️ {{ session('error') }}
    </div>
@endif


    <div class="container mx-auto mt-8 px-4">
        @yield('content')
    </div>
</body>
</html>
