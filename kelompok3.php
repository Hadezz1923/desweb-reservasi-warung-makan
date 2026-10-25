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
    <title>Warung Makan Mb Dina | Rasa Rumahan, Selalu Dirindukan</title>
    <link rel="stylesheet" href="assets/css/kelompok3.css?v=10" />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <header class="site-headerkelompok3">
        <nav class="navbarkelompok3">
            <a class="brandkelompok3" href="#homekelompok3">
                <img src="assets/images/logo_persegi.png" alt="" />
                <span>WARUNG MAKAN<strong>MB DINA</strong></span>
            </a>
            <div class="nav-linkskelompok3">
                <a href="#homekelompok3" class="menu-navkelompok3">Beranda</a>
                <a href="#menukelompok3" class="menu-navkelompok3">Menu</a>
                <a href="#tentangkelompok3" class="menu-navkelompok3">Tentang Kami</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="herokelompok3 section-wrapkelompok3" id="homekelompok3">
            <div class="hero-copykelompok3">
                <p class="eyebrowkelompok3">✦ HANGAT, LEZAT, DAN SELALU DIRINDUKAN</p>
                <h1>Rasa rumahan,<br />bikin <span>ingin kembali.</span></h1>
                <p class="hero-descriptionkelompok3">Nikmati hidangan khas Nusantara yang dimasak dengan sepenuh hati.</p>
                <div class="hero-actionskelompok3">
                    <a class="buttonkelompok3 button-secondarykelompok3" href="#menukelompok3">⌕ Lihat Menu</a>
                </div>
            </div>
            <div class="hero-visualkelompok3">
                <img src="assets/images/Indonesian Feast with Iced Tea.png" alt="Hidangan" />
            </div>
        </section>

        <section class="reservasi-herokelompok3 section-wrapkelompok3">
            <div class="section-headingkelompok3 reservasi-headingkelompok3">
                <p class="eyebrowkelompok3">PILIH LAYANAN RESERVASI</p>
                <h2>Reservasi <span>tanpa ribet.</span></h2>
            </div>
            <div class="reservasi-gridkelompok3">
                <a class="reservasi-cardkelompok3" href="kelompok3.php">Kembali</a>
                <a class="reservasi-cardkelompok3" href="kelompok3.php?reservasi=booking">Booking Meja</a>
                <a class="reservasi-cardkelompok3" href="kelompok3.php?reservasi=pre-order">Pre-Order</a>
                <a class="reservasi-cardkelompok3" href="kelompok3.php?reservasi=pembayaran">Pembayaran</a>
            </div>
        </section>

        <?php
        // untuk memunculkan form ya kids
        if ($reservasi === 'pre-order') {
            include __DIR__ . '/form_mahasiswa/2413010662.php';
        } elseif ($reservasi === 'pembayaran') {
            include __DIR__ . '/form_mahasiswa/2513010779.php';
        } elseif ($reservasi === 'booking') {
            // include booking
            // include __DIR__ . '/form_mahasiswa/xxxx.php';
        }
        ?>

        <section class="about-sectionkelompok3 section-wrapkelompok3" id="tentangkelompok3">
            <div>
                <p class="eyebrowkelompok3">SELAMAT DATANG</p>
                <h2>Tempat makan nyaman, <span>rasa penuh kenangan.</span></h2>
            </div>
            <p>Warung Makan Mb Dina menyajikan hidangan rumahan khas Indonesia untuk dinikmati bersama keluarga.</p>
        </section>
    </main>

    <footer class="site-footerkelompok3 section-wrapkelompok3">
        <p>© 2026 Warung Makan Mb Dina. Rasa rumahan, selalu dirindukan.</p>
    </footer>
</body>
</html>