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
</head>

<body>
    <header class="site-header">
        <nav class="navbar" aria-label="Navigasi utama">
            <a class="brand" href="#home" aria-label="Warung Makan Mb Dina, beranda">
                <img src="assets/images/logo_persegi.png" alt="" />
                <span>WARUNG MAKAN<strong>MB DINA</strong></span>
            </a>

            <div class="nav-links">
                <a href="#home" class="menu-nav active">Beranda</a>
                <a href="#menu" class="menu-nav">Menu</a>
                <a href="#book" class="menu-nav">Booking Meja</a>
                <a href="#pre-order" class="menu-nav">Pre-Order</a>
                <a href="#pembayaran" class="menu-nav">Pembayaran</a>
                <a href="#tentang" class="menu-nav">Tentang Kami</a>
            </div>

            <a class="nav-cta" href="#book">Reservasi Sekarang</a>
        </nav>
    </header>

    <main>
        <section class="hero section-wrap" id="home">
            <div class="hero-copy">
                <p class="eyebrow"><span aria-hidden="true">✦</span> HANGAT, LEZAT, DAN SELALU DIRINDUKAN</p>
                <h1>Rasa rumahan,<br />bikin <span>ingin kembali.</span></h1>
                <p class="hero-description">
                    Nikmati hidangan khas Nusantara yang dimasak dengan sepenuh hati.
                    Dari ayam bakar berbumbu hingga sop hangat, selalu ada menu yang
                    pas untuk menemani waktu makanmu.
                </p>
                <div class="hero-actions">
                    <a class="button button-primary" href="#book">Booking Meja <span aria-hidden="true">→</span></a>
                    <a class="button button-secondary" href="#menu"><span aria-hidden="true">⌕</span> Lihat Menu</a>
                </div>

                <div class="feature-list" aria-label="Keunggulan warung">
                    <div class="feature-card">
                        <span class="feature-icon" aria-hidden="true">⚡</span>
                        <span><strong>Cepat &amp; Praktis</strong><small>Pesan tanpa antre</small></span>
                    </div>
                    <div class="feature-card">
                        <span class="feature-icon feature-icon-pink" aria-hidden="true">♨</span>
                        <span><strong>Dimasak Segar</strong><small>Hangat setiap hari</small></span>
                    </div>
                    <div class="feature-card">
                        <span class="feature-icon feature-icon-coral" aria-hidden="true">♡</span>
                        <span><strong>Rasa Rumahan</strong><small> dibuat dengan hati</small></span>
                    </div>
                </div>
            </div>

            <div class="hero-visual">
                <img src="assets/images/Indonesian Feast with Iced Tea.png" alt="Hidangan gado-gado dan selat ditemani es teh" />
                <div class="image-note">
                    <span class="note-icon" aria-hidden="true">♨</span>
                    <span><small>MASAKAN NUSANTARA</small><strong>Enak di rumah,<br />hangat di hati.</strong></span>
                </div>
            </div>
        </section>

        <section class="steps section-wrap" aria-label="Cara menikmati hidangan">
            <article class="step-card" id="book">
                <span class="step-number">01.</span>
                <h2>Booking Meja</h2>
                <p>Pilih waktu kunjungan dan siapkan tempat untuk makan bersama orang tersayang.</p>
            </article>
            <article class="step-card" id="pre-order">
                <span class="step-number step-orange">02.</span>
                <h2>Pre-Order Menu</h2>
                <p>Pilih hidangan favorit lebih awal agar makanan siap saat kamu tiba.</p>
            </article>
            <article class="step-card" id="pembayaran">
                <span class="step-number step-gold">03.</span>
                <h2>Pembayaran Mudah</h2>
                <p>Tanyakan pilihan pembayaran yang tersedia langsung kepada tim kami.</p>
            </article>
        </section>

        <section class="menu-section section-wrap" id="menu">
            <div class="section-heading">
                <p class="eyebrow">DARI DAPUR KAMI</p>
                <h2>Menu favorit <span>pilihan keluarga.</span></h2>
                <p>Hidangan sederhana dengan rasa yang selalu bikin rindu.</p>
            </div>

            <div class="menu-grid">
                <article class="dish-card">
                    <img src="assets/images/ayam_bakar.webp" alt="Ayam bakar berbumbu" loading="lazy" />
                    <div class="dish-copy"><h3>Ayam Bakar</h3><p>Ayam berbumbu yang dibakar hingga harum.</p></div>
                </article>
                <article class="dish-card">
                    <img src="assets/images/gado_gado.webp" alt="Gado-gado dengan saus kacang" loading="lazy" />
                    <div class="dish-copy"><h3>Gado-gado</h3><p>Aneka sayuran dengan siraman saus kacang.</p></div>
                </article>
                <article class="dish-card">
                    <img src="assets/images/lotek.webp" alt="Lotek sayuran dengan bumbu kacang" loading="lazy" />
                    <div class="dish-copy"><h3>Lotek</h3><p>Sayuran segar dengan bumbu kacang khas.</p></div>
                </article>
                <article class="dish-card">
                    <img src="assets/images/selat.webp" alt="Selat dengan sayuran dan kuah gurih-manis" loading="lazy" />
                    <div class="dish-copy"><h3>Selat</h3><p>Hidangan khas Jawa dengan kuah gurih-manis.</p></div>
                </article>
                <article class="dish-card">
                    <img src="assets/images/sop_ayam.webp" alt="Sop ayam hangat" loading="lazy" />
                    <div class="dish-copy"><h3>Sop Ayam</h3><p>Kuah gurih hangat dengan ayam dan sayuran.</p></div>
                </article>
                <article class="dish-card">
                    <img src="assets/images/sop_galantin.webp" alt="Sop galantin dengan sayuran" loading="lazy" />
                    <div class="dish-copy"><h3>Sop Galantin</h3><p>Sop hangat dengan galantin dan sayuran.</p></div>
                </article>
            </div>
        </section>

        <section class="about-section section-wrap" id="tentang">
            <div>
                <p class="eyebrow">SELAMAT DATANG</p>
                <h2>Tempat makan nyaman, <span>rasa penuh kenangan.</span></h2>
            </div>
            <p>
                Warung Makan Mb Dina menyajikan hidangan rumahan khas Indonesia
                untuk dinikmati bersama keluarga dan teman. Kami percaya,
                makanan yang enak selalu terasa lebih istimewa saat disantap bersama.
            </p>
        </section>
    </main>

    <footer class="site-footer">
        <p>© 2026 Warung Makan Mb Dina. Rasa rumahan, selalu dirindukan.</p>
    </footer>
</body>
</html>
