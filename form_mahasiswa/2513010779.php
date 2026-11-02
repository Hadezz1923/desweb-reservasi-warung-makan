<?php
if (!empty($reservasiPaymentStyles)) {
?>
    <style>
        .pembayaranWrapperkelompok3 {
            --pembayaran-cream: #fff3df;
            --pembayaran-cream-dark: #f9e8ce;
            --pembayaran-brown: #512719;
            --pembayaran-brown-soft: #75594e;
            --pembayaran-red: #c90f2f;
            --pembayaran-red-dark: #a90926;
            --pembayaran-white: #fffefd;
            width: min(100% - 32px, 900px);
            max-width: 900px;
            margin: 0 auto;
            padding: 36px 0 70px;
            color: var(--pembayaran-brown);
        }

        body {
            background: var(--cream);
            color: var(--brown);
            font-family: "Outfit", sans-serif;
        }

        .pembayaranPanelkelompok3 {
            border-color: rgba(100, 63, 39, 0.08);
            background: var(--pembayaran-white);
            color: var(--pembayaran-brown);
        }

        .pembayaranEyebrowkelompok3 {
            margin: 0 0 8px;
            color: var(--pembayaran-red);
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .pembayaranPanelkelompok3 h2 {
            margin: 0 0 12px;
            font-size: clamp(28px, 5vw, 40px);
            font-weight: 700;
        }

        .pembayaranIntrokelompok3,
        .pembayaranReceiptNotekelompok3 {
            color: var(--pembayaran-brown-soft);
            line-height: 1.6;
        }

        .pembayaranFormkelompok3 label {
            font-weight: 700;
        }

        .pembayaranFormkelompok3 .form-control,
        .pembayaranFormkelompok3 .form-select {
            min-height: 48px;
            border-color: #dfcdb8;
            border-radius: 10px;
            color: var(--pembayaran-brown);
        }

        .pembayaranFormkelompok3 .form-control:focus,
        .pembayaranFormkelompok3 .form-select:focus {
            border-color: var(--pembayaran-red);
            box-shadow: 0 0 0 0.25rem rgb(201 15 47 / 18%);
        }

        .pembayaranButtonkelompok3 {
            --bs-btn-color: #fff;
            --bs-btn-bg: var(--pembayaran-red);
            --bs-btn-border-color: var(--pembayaran-red);
            --bs-btn-hover-color: #fff;
            --bs-btn-hover-bg: var(--pembayaran-red-dark);
            --bs-btn-hover-border-color: var(--pembayaran-red-dark);
            --bs-btn-active-color: #fff;
            --bs-btn-active-bg: var(--pembayaran-red-dark);
            --bs-btn-active-border-color: var(--pembayaran-red-dark);
            min-height: 50px;
            padding: 12px 20px;
            border-radius: 10px;
            font-weight: 800;
        }

        .pembayaranReceiptRowkelompok3 {
            border-color: var(--pembayaran-cream-dark) !important;
        }

        .pembayaranReceiptTotalkelompok3 {
            margin-top: 8px;
            color: var(--pembayaran-red);
            font-size: 20px;
            font-weight: 800;
        }

        .pembayaranSuccesskelompok3 {
            border-color: #b7ddbe !important;
            background: #f1fff3;
        }

        .pembayaranSuccesskelompok3 h2 {
            color: #26733a;
        }

        @media (max-width: 720px) {
            .pembayaranWrapperkelompok3 {
                padding-top: 24px;
            }

            .pembayaranReceiptRowkelompok3 {
                flex-direction: column;
                gap: 4px;
            }
        }

        @media screen {
            
        }
    </style>
<?php
    return;
}

$menuHarga2513010779 = [
    'Ayam Bakar' => 25000,
    'Gado-gado' => 15000,
    'Lotek' => 14000,
    'Selat' => 22000,
    'Sop Ayam' => 18000,
    'Sop Galantin' => 20000,
];

$nama2513010779 = '';
$menuDipilih2513010779 = '';
$jumlah2513010779 = 1;
$pesananValid2513010779 = false;
$pesanError2513010779 = '';

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    $namaInput2513010779 = $_POST['nama2513010779'] ?? '';
    $menuInput2513010779 = $_POST['menu2513010779'] ?? '';
    $jumlahRaw2513010779 = $_POST['jumlah2513010779'] ?? '';
    $nama2513010779 = is_string($namaInput2513010779) ? trim($namaInput2513010779) : '';
    $menuDipilih2513010779 = is_string($menuInput2513010779) ? $menuInput2513010779 : '';
    $jumlahInput2513010779 = is_string($jumlahRaw2513010779)
        ? filter_var($jumlahRaw2513010779, FILTER_VALIDATE_INT)
        : false;

    if ($nama2513010779 === '') {
        $pesanError2513010779 = 'Nama wajib diisi.';
    } elseif (!array_key_exists($menuDipilih2513010779, $menuHarga2513010779)) {
        $pesanError2513010779 = 'Silakan pilih menu yang tersedia.';
    } elseif (
        $jumlahInput2513010779 === false
        || $jumlahInput2513010779 === null
        || $jumlahInput2513010779 < 1
        || $jumlahInput2513010779 > 20
    ) {
        $pesanError2513010779 = 'Jumlah harus antara 1 sampai 20.';
    } else {
        $jumlah2513010779 = $jumlahInput2513010779;
        $pesananValid2513010779 = true;
    }
}

$rupiah2513010779 = static function (int $nilai2513010779): string {
    return 'Rp' . number_format($nilai2513010779, 0, ',', '.');
};
?>
<section class="pembayaranWrapperkelompok3 container" aria-labelledby="pembayaranTitlekelompok3">


    <section class="pembayaranPanelkelompok3 card border-0 shadow-sm rounded-4 mb-4">
        <div class="card-body p-4 p-md-5">
            <div class="row align-items-center g-4">
                <div class="col-12 col-md-4">
                    <div class="pembayaranFotoKelompok3">
                        <img src="/assets/images/profile_2513010779.png" alt="my-profile">
                    </div>
                </div>

                <div class="col-12 col-md-8">
                    <p class="pembayaranEyebrowkelompok3">Pembayaran</p>
                    <h2 id="pembayaranTitlekelompok3">Pesan menu favorit</h2>
                    <p class="pembayaranIntrokelompok3">Isi data pesanan untuk melihat ringkasan dan total pembayaran.</p>

                    <form class="pembayaranFormkelompok3 row g-3 mt-4" method="post" action="kelompok3.php?reservasi=pembayaran">
                        <label class="col-12 form-label" for="nama2513010779kelompok3">
                            Nama
                            <input class="form-control mt-2" id="nama2513010779kelompok3" name="nama2513010779" type="text" maxlength="100" required
                                value="<?= htmlspecialchars($nama2513010779, ENT_QUOTES, 'UTF-8') ?>">
                        </label>

                        <label class="col-12 form-label" for="menu2513010779kelompok3">
                            Menu
                            <select class="form-select mt-2" id="menu2513010779kelompok3" name="menu2513010779" required>
                                <option value="">Pilih menu</option>
                                <?php foreach ($menuHarga2513010779 as $namaMenu2513010779 => $harga2513010779): ?>
                                    <option value="<?= htmlspecialchars($namaMenu2513010779, ENT_QUOTES, 'UTF-8') ?>"
                                        <?= $menuDipilih2513010779 === $namaMenu2513010779 ? 'selected' : '' ?>>
                                        <?= htmlspecialchars($namaMenu2513010779, ENT_QUOTES, 'UTF-8') ?>
                                        — <?= $rupiah2513010779($harga2513010779) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </label>

                        <label class="col-12 form-label" for="jumlah2513010779kelompok3">
                            Jumlah
                            <input class="form-control mt-2" id="jumlah2513010779kelompok3" name="jumlah2513010779" type="number" min="1" max="20" required
                                value="<?= htmlspecialchars((string) $jumlah2513010779, ENT_QUOTES, 'UTF-8') ?>">
                        </label>

                        <div class="col-12">
                            <button class="btn pembayaranButtonkelompok3 w-100" type="submit">Bayar dan tampilkan struk</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <?php if ($pesananValid2513010779): ?>
        <?php $total2513010779 = $menuHarga2513010779[$menuDipilih2513010779] * $jumlah2513010779; ?>
        <section class="pembayaranPanelkelompok3 card border-0 shadow-sm rounded-4 mb-4" aria-labelledby="strukTitlekelompok3">
            <div class="card-body p-4 p-md-5">
                <p class="pembayaranEyebrowkelompok3">Struk Pesanan</p>
                <h2 id="strukTitlekelompok3">Ringkasan pembayaran</h2>
                <div class="pembayaranReceiptRowkelompok3 d-flex justify-content-between gap-3 py-2 border-bottom">
                    <span>Nama</span>
                    <strong><?= htmlspecialchars($nama2513010779, ENT_QUOTES, 'UTF-8') ?></strong>
                </div>
                <div class="pembayaranReceiptRowkelompok3 d-flex justify-content-between gap-3 py-2 border-bottom">
                    <span>Menu</span>
                    <strong><?= htmlspecialchars($menuDipilih2513010779, ENT_QUOTES, 'UTF-8') ?></strong>
                </div>
                <div class="pembayaranReceiptRowkelompok3 d-flex justify-content-between gap-3 py-2 border-bottom">
                    <span>Harga</span>
                    <strong><?= $rupiah2513010779($menuHarga2513010779[$menuDipilih2513010779]) ?></strong>
                </div>
                <div class="pembayaranReceiptRowkelompok3 d-flex justify-content-between gap-3 py-2 border-bottom">
                    <span>Jumlah</span>
                    <strong><?= $jumlah2513010779 ?></strong>
                </div>
                <p class="pembayaranReceiptTotalkelompok3">Total: <?= $rupiah2513010779($total2513010779) ?></p>
                <p class="pembayaranReceiptNotekelompok3">Ini adalah simulasi pembayaran untuk pesanan Anda.</p>
            </div>
        </section>

        <section class="pembayaranPanelkelompok3 pembayaranSuccesskelompok3 card border-0 shadow-sm rounded-4 mb-4" aria-live="polite">
            <div class="card-body p-4 p-md-5">
                <h2>Pembayaran berhasil dicatat!</h2>
                <p>Terima kasih, <?= htmlspecialchars($nama2513010779, ENT_QUOTES, 'UTF-8') ?>. Pesanan Anda sudah tercatat.</p>
            </div>
        </section>
    <?php endif; ?>
</section>