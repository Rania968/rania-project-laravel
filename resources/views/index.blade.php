<!DOCTYPE html>

    <footer>
        <p>&copy; 2024 Toko Kue Kami. Semua hak cipta dilindungi.</p>
    </footer>
</body>
</html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Kue Kami</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <header>
        <h1>Toko Kue Kami</h1>
        <nav>
            <ul>
                <li><a href="#home">Beranda</a></li>
                <li><a href="#produk">Produk</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <h2>Selamat Datang di Toko Kue Kami!</h2>
        <p>Temukan berbagai macam kue lezat yang kami tawarkan. Kami menggunakan bahan-bahan berkualitas untuk memastikan setiap kue yang kami buat adalah yang terbaik.</p>
    </section>

    <section id="tentang">
        <h2>Tentang Saya</h2>
        <img src="orang.jpg" alt="Foto Profil" class="profil-img">
        <p>Halo! Nama saya [Nama Anda], dan saya adalah pemilik dari Toko Kue Kami. Saya memulai usaha ini karena kecintaan saya terhadap pembuatan kue dan ingin berbagi kelezatan kue dengan Anda semua. Dengan pengalaman bertahun-tahun dalam membuat kue, saya memastikan setiap produk yang saya buat adalah hasil yang terbaik dan penuh perhatian.</p>
        <p>Di Toko Kue Kami, kami menawarkan berbagai macam kue yang lezat dan berkualitas tinggi. Kami juga menerima pesanan khusus untuk berbagai acara. Terima kasih telah mengunjungi toko kami!</p>
    </section>

    <section id="produk">
        <h2>Produk Kami</h2>
        <div class="produk">
            <div class="produk-item">
                <img src="pukis.jpg" alt="Pukis">
                <h3>Pukis</h3>
                <p>Harga: Rp. 20.000</p>
                <p>Deskripsi: pukis coklat keju yang lezat dan hangat.</p>
            </div>
            <div class="produk-item">
                <img src="mochi.jpg" alt="Mochi">
                <h3>Mochi</h3>
                <p>Harga: Rp. 60.000</p>
                <p>Deskripsi: Mochi stawbery yang anis serta kenyal yang di padukan oleh krim vanila di dalam nya.</p>
            </div>
            <div class="produk-item">
                <img src="kuee.jpg" alt="kue">
                <h3>Disert</h3>
                <p>Harga: Rp. 70.000</p>
                <p>Deskripsi: kue nikmat dengan design indah.</p>
            </div>
            <!-- Tambahkan lebih banyak produk di sini -->
        </div>
    </section>

    <section id="kontak">
        <h2>Kontak Kami</h2>
        <p>Untuk pertanyaan lebih lanjut atau pemesanan, silakan hubungi kami melalui formulir di bawah ini atau gunakan informasi kontak yang tersedia.</p>
        <div class="contact-container">
            <form action="submit-form.php" method="post" class="contact-form">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <button type="submit">Kirim Pesan</button>
            </form>
            <div class="contact-info">
                <h3>Informasi Kontak Lainnya:</h3>
                <p>Email: <a href="mailto:info@tokokue.com">info@tokokue.com</a></p>
                <p>Telepon: (021) 123-4567</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Toko Kue Kami. Semua hak cipta dilindungi.</p>
    </footer>
</body>
</html>