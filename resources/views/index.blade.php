*<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Kue Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-brown-700 text-white p-4">
        <h1 class="text-2xl font-bold text-center">Toko Kue Kami</h1>
        <nav class="flex justify-center space-x-4 mt-2">
            <a href="#" class="hover:underline">Beranda</a>
            <a href="#" class="hover:underline">Produk</a>
            <a href="#" class="hover:underline">Kontak</a>
        </nav>
    </header>

    <main class="container mx-auto mt-8 px-4">
        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-4">Selamat Datang di Toko Kue Kami!</h2>
            <p class="text-gray-700">Temukan berbagai macam kue lezat yang kami tawarkan. Kami menggunakan bahan-bahan berkualitas untuk memastikan setiap kue yang kami buat adalah yang terbaik.</p>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-4">Tentang Saya</h2>
            <img src="path_to_profile_image.jpg" alt="Foto Profil" class="w-32 h-32 rounded-full mb-4">
            <p class="text-gray-700">Halo! Nama saya [Nama Anda], dan saya adalah pemilik dari Toko Kue Kami. Saya memulai usaha ini karena kecintaan saya terhadap pembuatan kue dan ingin berbagi kelezatan kue dengan Anda semua. Dengan pengalaman bertahun-tahun dalam membuat kue, saya memastikan setiap produk yang saya buat adalah hasil yang terbaik dan penuh perhatian.</p>
            <p class="text-gray-700 mt-4">Di Toko Kue Kami, kami menawarkan berbagai macam kue yang lezat dan berkualitas tinggi. Kami juga menerima pesanan khusus untuk berbagai acara. Terima kasih telah mengunjungi toko kami!</p>
            <a href="{{ route('about') }}">about</a>
        <a href="{{ route('login') }}">login</a>
        </section>
    

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6">Produk Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="path_to_pukis_image.jpg" alt="Pukis" class="w-full h-48 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Pukis</h3>
                    <p class="text-gray-600">Harga: Rp. 70.000</p>
                    <p class="text-gray-700 mt-2">Deskripsi: Kue nikmat dengan desain indah.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="path_to_mochi_image.jpg" alt="Mochi" class="w-full h-48 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Mochi</h3>
                    <p class="text-gray-600">Harga: Rp. 60.000</p>
                    <p class="text-gray-700 mt-2">Deskripsi: Mochi strawbery yang anis serta kenyal yang di padukan oleh krim vanila di dalam nya.</p>
                </div>
                <div class="bg-white rounded-lg shadow-md p-4">
                    <img src="path_to_disert_image.jpg" alt="Disert" class="w-full h-48 object-cover mb-4 rounded">
                    <h3 class="text-xl font-semibold mb-2">Disert</h3>
                    <p class="text-gray-600">Harga: Rp. 70.000</p>
                    <p class="text-gray-700 mt-2">Deskripsi: Kue nikmat dengan desain indah.</p>
                </div>
            </div>
        </section>

        <section class="mb-12">
            <h2 class="text-2xl font-bold mb-6">Kontak Kami</h2>
            <p class="mb-4">Untuk pertanyaan lebih lanjut atau pemesanan, silakan hubungi kami melalui formulir di bawah ini atau gunakan informasi kontak yang tersedia.</p>
            <form class="bg-white rounded-lg shadow-md p-6 mb-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="nama" class="block text-gray-700 mb-2">Nama:</label>
                        <input type="text" id="nama" name="nama" class="w-full border rounded px-3 py-2">
                    </div>
                    <div>
                        <label for="email" class="block text-gray-700 mb-2">Email:</label>
                        <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="pesan" class="block text-gray-700 mb-2">Pesan:</label>
                    <textarea id="pesan" name="pesan" rows="4" class="w-full border rounded px-3 py-2"></textarea>
                </div>
                <button type="submit" class="bg-brown-600 text-white px-4 py-2 rounded hover:bg-brown-700">Kirim Pesan</button>
            </form>
            <div class="bg-white rounded-lg shadow-md p-6">
                <h3 class="text-xl font-semibold mb-4">Informasi Kontak Lainnya:</h3>
                <p class="mb-2">Email: <a href="mailto:info@tokokue.com" class="text-blue-500 hover:underline">info@tokokue.com</a></p>
                <p>Telepon: (021) 123-4567</p>
            </div>
        </section>
    </main>
</body>
</html>