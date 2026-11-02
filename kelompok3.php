<?php
$reservasi = $_GET['reservasi'] ?? '';
$reservasi = is_string($reservasi) && in_array($reservasi, ['booking', 'pre-order', 'pembayaran'], true)
    ? $reservasi
    : '';
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Nikmati hidangan rumahan khas Indonesia di Warung Makan Mb Dina. Pesan meja dan menu favorit Anda." />
    <title>Warung Makan Mb Dina | Rasa Rumahan, Selalu Dirindukan</title>
    <link rel="stylesheet" href="assets/css/kelompok3.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <?php if ($reservasi === 'booking'): ?>
        <?php $reservasiBookingStyles = true; include __DIR__ . '/form_mahasiswa/2513010757.php'; unset($reservasiBookingStyles); ?>
    <?php endif; ?>
    <?php if ($reservasi === 'pre-order'): ?>
        <?php $reservasiPreOrderStyles = true; include __DIR__ . '/form_mahasiswa/2413010662.php'; unset($reservasiPreOrderStyles); ?>
    <?php endif; ?>
    <?php if ($reservasi === 'pembayaran'): ?>
        <?php $reservasiPaymentStyles = true; include __DIR__ . '/form_mahasiswa/2513010779.php'; unset($reservasiPaymentStyles); ?>
    <?php endif; ?>
</head>
<body>
    <header class="site-headerkelompok3">
        <nav class="navbarkelompok3" aria-label="Navigasi utama">
            <a class="brandkelompok3" href="#homekelompok3"><img src="assets/images/logo_persegi.png" alt="" /><span>WARUNG MAKAN<strong>MB DINA</strong></span></a>
            <div class="nav-linkskelompok3">
                <a href="#homekelompok3" class="menu-navkelompok3 activekelompok3">Beranda</a>
                <a href="#menukelompok3" class="menu-navkelompok3">Menu</a>
                <a href="#reservasiKelompok3" class="menu-navkelompok3">Reservasi</a>
                <a href="#tentangkelompok3" class="menu-navkelompok3">Tentang Kami</a>
            </div>
        </nav>
    </header>
    <main>
        <section class="herokelompok3 section-wrapkelompok3" id="homekelompok3">
            <div class="hero-copykelompok3">
                <p class="eyebrowkelompok3"><span>✦</span> HANGAT, LEZAT, DAN SELALU DIRINDUKAN</p>
                <h1>Rasa rumahan,<br />bikin <span>ingin kembali.</span></h1>
                <p class="hero-descriptionkelompok3">Nikmati hidangan khas Nusantara yang dimasak dengan sepenuh hati. Dari ayam bakar berbumbu hingga sop hangat, selalu ada menu yang pas untuk menemani waktu makanmu.</p>
                <div class="hero-actionskelompok3"><a class="buttonkelompok3 button-secondarykelompok3" href="#menukelompok3">⌕ Lihat Menu</a></div>
                <div class="feature-listkelompok3">
                    <div class="feature-cardkelompok3"><span class="feature-iconkelompok3">⚡</span><span><strong>Cepat & Praktis</strong><small>Pesan tanpa antre</small></span></div>
                    <div class="feature-cardkelompok3"><span class="feature-iconkelompok3 feature-icon-pinkkelompok3">♨</span><span><strong>Dimasak Segar</strong><small>Hangat setiap hari</small></span></div>
                    <div class="feature-cardkelompok3"><span class="feature-iconkelompok3 feature-icon-coralkelompok3">♡</span><span><strong>Rasa Rumahan</strong><small> dibuat dengan hati</small></span></div>
                </div>
            </div>
            <div class="hero-visualkelompok3"><img src="assets/images/Indonesian Feast with Iced Tea.png" alt="Hidangan gado-gado dan selat ditemani es teh" /></div>
        </section>

        <section class="stepskelompok3 section-wrapkelompok3">
            <article class="step-cardkelompok3"><span class="step-numberkelompok3">01.</span><h2>Booking Meja</h2><p>Pilih waktu kunjungan dan siapkan tempat untuk makan bersama orang tersayang.</p></article>
            <article class="step-cardkelompok3"><span class="step-numberkelompok3 step-orangekelompok3">02.</span><h2>Pre-Order Menu</h2><p>Pilih hidangan favorit lebih awal agar makanan siap saat kamu tiba.</p></article>
            <article class="step-cardkelompok3"><span class="step-numberkelompok3 step-goldkelompok3">03.</span><h2>Pembayaran Mudah</h2><p>Tanyakan pilihan pembayaran yang tersedia langsung kepada tim kami.</p></article>
        </section>

        <section class="menu-sectionkelompok3 section-wrapkelompok3" id="menukelompok3">
            <div class="section-headingkelompok3"><p class="eyebrowkelompok3">DARI DAPUR KAMI</p><h2>Menu favorit <span>pilihan keluarga.</span></h2><p>Hidangan sederhana dengan rasa yang selalu bikin rindu.</p></div>
            <div class="menu-gridkelompok3">
                <article class="dish-cardkelompok3"><img src="assets/images/ayam_bakar.webp" alt="Ayam bakar" /><div class="dish-copykelompok3"><h3>Ayam Bakar</h3><p>Ayam berbumbu yang dibakar hingga harum.</p></div></article>
                <article class="dish-cardkelompok3"><img src="assets/images/gado_gado.webp" alt="Gado-gado" /><div class="dish-copykelompok3"><h3>Gado-gado</h3><p>Aneka sayuran dengan siraman saus kacang.</p></div></article>
                <article class="dish-cardkelompok3"><img src="assets/images/lotek.webp" alt="Lotek" /><div class="dish-copykelompok3"><h3>Lotek</h3><p>Sayuran segar dengan bumbu kacang khas.</p></div></article>
                <article class="dish-cardkelompok3"><img src="assets/images/selat.webp" alt="Selat" /><div class="dish-copykelompok3"><h3>Selat</h3><p>Hidangan khas Jawa dengan kuah gurih-manis.</p></div></article>
                <article class="dish-cardkelompok3"><img src="assets/images/sop_ayam.webp" alt="Sop ayam" /><div class="dish-copykelompok3"><h3>Sop Ayam</h3><p>Kuah gurih hangat dengan ayam dan sayuran.</p></div></article>
                <article class="dish-cardkelompok3"><img src="assets/images/sop_galantin.webp" alt="Sop galantin" /><div class="dish-copykelompok3"><h3>Sop Galantin</h3><p>Sop hangat dengan galantin dan sayuran.</p></div></article>
            </div>
        </section>

        <section class="reservasi-herokelompok3 section-wrapkelompok3" id="reservasiKelompok3">
            <div class="section-headingkelompok3 reservasi-headingkelompok3"><p class="eyebrowkelompok3">PILIH LAYANAN RESERVASI</p><h2>Reservasi <span>tanpa ribet.</span></h2></div>
            <div class="reservasi-gridkelompok3">
                <a class="reservasi-cardkelompok3" href="kelompok3.php">Kembali</a>
                <a class="reservasi-cardkelompok3" href="kelompok3.php?reservasi=booking">Booking Meja</a>
                <a class="reservasi-cardkelompok3" href="kelompok3.php?reservasi=pre-order">Pre-Order</a>
                <a class="reservasi-cardkelompok3" href="kelompok3.php?reservasi=pembayaran">Pembayaran</a>
            </div>
        </section>

        <?php
        if ($reservasi === 'booking') { include __DIR__ . '/form_mahasiswa/2513010757.php'; }
        if ($reservasi === 'pre-order') { include __DIR__ . '/form_mahasiswa/2413010662.php'; }
        if ($reservasi === 'pembayaran') { include __DIR__ . '/form_mahasiswa/2513010779.php'; }
        ?>

        <section class="about-sectionkelompok3 section-wrapkelompok3" id="tentangkelompok3">
            <div><p class="eyebrowkelompok3">SELAMAT DATANG</p><h2>Tempat makan nyaman, <span>rasa penuh kenangan.</span></h2></div>
            <p>Warung Makan Mb Dina menyajikan hidangan rumahan khas Indonesia untuk dinikmati bersama keluarga dan teman.</p>
        </section>
    </main>
    <footer class="site-footerkelompok3 section-wrapkelompok3"><p>© 2026 Warung Makan Mb Dina. Rasa rumahan, selalu dirindukan.</p></footer>
</body>
</html>