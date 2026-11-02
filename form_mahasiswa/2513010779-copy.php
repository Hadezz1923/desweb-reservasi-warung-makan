<?php
if (!empty($reservasiPaymentStyles)) {
    ?>
    <style>
        .pembayaranWrapperkelompok3 {
            width: min(100% - 64px, 900px);
            margin: 0 auto;
            padding: 36px 0 70px;
            color: #512719;
        }

        .pembayaranPanelkelompok3 {
            margin-bottom: 20px;
            padding: clamp(24px, 5vw, 40px);
            border: 1px solid rgba(100, 63, 39, 0.08);
            border-radius: 20px;
            background: #fffefd;
            box-shadow: 0 12px 34px rgba(83, 52, 27, 0.08);
        }

        .pembayaranEyebrowkelompok3 {
            margin: 0 0 8px;
            color: #c90f2f;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .pembayaranPanelkelompok3 h2 {
            margin: 0 0 12px;
            font-size: clamp(28px, 5vw, 40px);
        }

        .pembayaranIntrokelompok3,
        .pembayaranReceiptNotekelompok3 {
            color: #75594e;
            line-height: 1.6;
        }

        .pembayaranFormkelompok3 {
            display: grid;
            gap: 18px;
            margin-top: 26px;
        }

        .pembayaranFormkelompok3 label {
            display: grid;
            gap: 8px;
            font-weight: 700;
        }

        .pembayaranFormkelompok3 input,
        .pembayaranFormkelompok3 select {
            width: 100%;
            min-height: 48px;
            padding: 10px 12px;
            border: 1px solid #dfcdb8;
            border-radius: 10px;
            background: #fff;
            color: #512719;
            font: inherit;
        }

        .pembayaranFormkelompok3 input:focus,
        .pembayaranFormkelompok3 select:focus {
            outline: 3px solid rgba(201, 15, 47, 0.18);
            border-color: #c90f2f;
        }

        .pembayaranButtonkelompok3 {
            min-height: 50px;
            padding: 12px 20px;
            border: 0;
            border-radius: 10px;
            background: #c90f2f;
            color: #fff;
            cursor: pointer;
            font: inherit;
            font-weight: 800;
        }

        .pembayaranButtonkelompok3:hover {
            background: #a90926;
        }

        .pembayaranErrorkelompok3 {
            margin: 18px 0 0;
            padding: 12px 14px;
            border-radius: 10px;
            background: #fff0f0;
            color: #a90926;
        }

        .pembayaranReceiptRowkelompok3 {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            padding: 12px 0;
            border-bottom: 1px solid #efdfc8;
        }

        .pembayaranReceiptTotalkelompok3 {
            margin-top: 8px;
            color: #c90f2f;
            font-size: 20px;
            font-weight: 800;
        }

        .pembayaranSuccesskelompok3 {
            border-color: #b7ddbe;
            background: #f1fff3;
        }

        .pembayaranSuccesskelompok3 h2 {
            color: #26733a;
        }

        @media (max-width: 720px) {
            .pembayaranWrapperkelompok3 {
                width: min(100% - 32px, 900px);
                padding-top: 24px;
            }

            .pembayaranReceiptRowkelompok3 {
                flex-direction: column;
                gap: 4px;
            }
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
<section class="pembayaranWrapperkelompok3" aria-labelledby="pembayaranTitlekelompok3">
    <section class="pembayaranPanelkelompok3">
        <p class="pembayaranEyebrowkelompok3">Pembayaran</p>
        <h2 id="pembayaranTitlekelompok3">Pesan menu favorit</h2>
        <p class="pembayaranIntrokelompok3">Isi data pesanan untuk melihat ringkasan dan total pembayaran.</p>

        <?php if ($pesanError2513010779 !== ''): ?>
            <p class="pembayaranErrorkelompok3" role="alert">
                <?= htmlspecialchars($pesanError2513010779, ENT_QUOTES, 'UTF-8') ?>
            </p>
        <?php endif; ?>

        <form class="pembayaranFormkelompok3" method="post" action="kelompok3.php?reservasi=pembayaran">
            <label for="nama2513010779kelompok3">
                Nama
                <input id="nama2513010779kelompok3" name="nama2513010779" type="text" maxlength="100" required
                    value="<?= htmlspecialchars($nama2513010779, ENT_QUOTES, 'UTF-8') ?>">
            </label>

            <label for="menu2513010779kelompok3">
                Menu
                <select id="menu2513010779kelompok3" name="menu2513010779" required>
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

            <label for="jumlah2513010779kelompok3">
                Jumlah
                <input id="jumlah2513010779kelompok3" name="jumlah2513010779" type="number" min="1" max="20" required
                    value="<?= htmlspecialchars((string) $jumlah2513010779, ENT_QUOTES, 'UTF-8') ?>">
            </label>

            <button class="pembayaranButtonkelompok3" type="submit">Bayar dan tampilkan struk</button>
        </form>
    </section>

    <?php if ($pesananValid2513010779): ?>
        <?php $total2513010779 = $menuHarga2513010779[$menuDipilih2513010779] * $jumlah2513010779; ?>
        <section class="pembayaranPanelkelompok3" aria-labelledby="strukTitlekelompok3">
            <p class="pembayaranEyebrowkelompok3">Struk Pesanan</p>
            <h2 id="strukTitlekelompok3">Ringkasan pembayaran</h2>
            <div class="pembayaranReceiptRowkelompok3">
                <span>Nama</span>
                <strong><?= htmlspecialchars($nama2513010779, ENT_QUOTES, 'UTF-8') ?></strong>
            </div>
            <div class="pembayaranReceiptRowkelompok3">
                <span>Menu</span>
                <strong><?= htmlspecialchars($menuDipilih2513010779, ENT_QUOTES, 'UTF-8') ?></strong>
            </div>
            <div class="pembayaranReceiptRowkelompok3">
                <span>Harga</span>
                <strong><?= $rupiah2513010779($menuHarga2513010779[$menuDipilih2513010779]) ?></strong>
            </div>
            <div class="pembayaranReceiptRowkelompok3">
                <span>Jumlah</span>
                <strong><?= $jumlah2513010779 ?></strong>
            </div>
            <p class="pembayaranReceiptTotalkelompok3">Total: <?= $rupiah2513010779($total2513010779) ?></p>
            <p class="pembayaranReceiptNotekelompok3">Ini adalah simulasi pembayaran untuk pesanan Anda.</p>
        </section>

        <section class="pembayaranPanelkelompok3 pembayaranSuccesskelompok3" aria-live="polite">
            <h2>Pembayaran berhasil dicatat!</h2>
            <p>Terima kasih, <?= htmlspecialchars($nama2513010779, ENT_QUOTES, 'UTF-8') ?>. Pesanan Anda sudah tercatat.</p>
        </section>
    <?php endif; ?>
</section>
