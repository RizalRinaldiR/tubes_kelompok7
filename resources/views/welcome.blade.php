<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Pak Jayusman</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-gradient-to-r from-indigo-600 to-blue-500 text-white shadow-lg">
        <div class="container mx-auto px-4 py-6 flex justify-between items-center">
            <h1 class="text-3xl font-bold">Market Pak Jayusman</h1>
            <div class="flex space-x-4">
                <a href="{{ route('login') }}" class="px-4 py-2 bg-white text-indigo-600 rounded-md shadow hover:bg-gray-100">Login</a>
                <a href="{{ route('register') }}" class="px-4 py-2 bg-indigo-700 rounded-md shadow hover:bg-indigo-800">Register</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gray-50">
        <div class="container mx-auto px-4 py-16 flex flex-col-reverse lg:flex-row items-center">
            <div class="lg:w-1/2 text-center lg:text-left">
                <h2 class="text-4xl font-extrabold text-gray-800 mb-4">Selamat Datang di Market Pak Jayusman!</h2>
                <p class="text-lg text-gray-600 mb-6">
                    Kami menyediakan berbagai kebutuhan sehari-hari dengan harga yang bersaing. 
                    Nikmati pengalaman belanja yang cepat, mudah, dan nyaman.
                </p>
                <a href="{{ route('login') }}" class="px-6 py-3 bg-indigo-600 text-white font-semibold rounded-md shadow hover:bg-indigo-700">
                    Mulai Belanja
                </a>
            </div>
            <div class="lg:w-1/2">
                <img src="{{ asset('images/market.png') }}" alt="Market Pak Jayusman" class="rounded-lg shadow-lg">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="bg-white">
        <div class="container mx-auto px-4 py-16">
            <h3 class="text-3xl font-bold text-center text-gray-800 mb-12">Kenapa Pilih Kami?</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                    <img src="{{ asset('images/produk.png') }}" alt="Quality" class="w-16 h-16 mx-auto mb-4">
                    <h4 class="text-xl font-semibold text-gray-800">Produk Berkualitas</h4>
                    <p class="text-gray-600 mt-2">Semua produk kami dipilih dengan teliti untuk memastikan kualitas terbaik.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                    <img src="{{ asset('images/price.png') }}" alt="Price" class="w-16 h-16 mx-auto mb-4">
                    <h4 class="text-xl font-semibold text-gray-800">Harga Terjangkau</h4>
                    <p class="text-gray-600 mt-2">Kami menawarkan harga yang kompetitif untuk memenuhi kebutuhan Anda.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg text-center">
                    <img src="{{ asset('images/service.png') }}" alt="Service" class="w-16 h-16 mx-auto mb-4">
                    <h4 class="text-xl font-semibold text-gray-800">Layanan Terbaik</h4>
                    <p class="text-gray-600 mt-2">Tim kami siap membantu Anda kapan saja dengan layanan yang ramah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Market Pak Jayusman. Semua Hak Dilindungi.</p>
        </div>
    </footer>
</body>
</html>
