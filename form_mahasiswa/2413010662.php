<?php
if (!empty($reservasiPreOrderStyles)) {
    ?>
    <style>
        .preOrderWrapperkelompok3 {
            width: min(100% - 64px, 900px);
            margin: 0 auto;
            padding: 36px 0 70px;
            color: #512719;
        }

        .preOrderPanelkelompok3 {
            margin-bottom: 20px;
            padding: clamp(24px, 5vw, 40px);
            border: 1px solid rgba(100, 63, 39, 0.08);
            border-radius: 20px;
            background: #fffefd;
            box-shadow: 0 12px 34px rgba(83, 52, 27, 0.08);
        }

        .preOrderEyebrowkelompok3 {
            margin: 0 0 8px;
            color: #e67e22;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .preOrderPanelkelompok3 h2 {
            margin: 0 0 12px;
            font-size: clamp(28px, 5vw, 40px);
        }

        .preOrderIntrokelompok3,
        .preOrderReceiptNotekelompok3 {
            color: #75594e;
            line-height: 1.6;
        }

        .preOrderFormkelompok3 {
            display: grid;
            gap: 18px;
            margin-top: 26px;
        }

        .preOrderFormkelompok3 label {
            display: grid;
            gap: 8px;
            font-weight: 700;
        }

        .preOrderFormkelompok3 input,
        .preOrderFormkelompok3 select,
        .preOrderFormkelompok3 textarea {
            width: 100%;
            min-height: 48px;
            padding: 10px 12px;
            border: 1px solid #dfcdb8;
            border-radius: 10px;
            background: #fff;
            color: #512719;
            font: inherit;
        }

        .preOrderFormkelompok3 textarea {
            min-height: 80px;
            resize: vertical;
        }

        .preOrderFormkelompok3 input:focus,
        .preOrderFormkelompok3 select:focus,
        .preOrderFormkelompok3 textarea:focus {
            outline: 3px solid rgba(230, 126, 34, 0.18);
            border-color: #e67e22;
        }

        .preOrderButtonkelompok3 {
            min-height: 50px;
            padding: 12px 20px;
            border: 0;
            border-radius: 10px;
            background: #e67e22;
            color: #fff;
            cursor: pointer;
            font: inherit;
            font-weight: 800;
        }

        .preOrderButtonkelompok3:hover {
            background: #d35400;
        }

        .preOrderErrorkelompok3 {
            margin: 18px 0 0;
            padding: 12px 14px;
            border-radius: 10px;
            background: #fff0f0;
            color: #a90926;
        }

        .preOrderReceiptRowkelompok3 {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            padding: 12px 0;
            border-bottom: 1px solid #efdfc8;
        }

        .preOrderReceiptTotalkelompok3 {
            margin-top: 8px;
            color: #e67e22;
            font-size: 20px;
            font-weight: 800;
        }

        .preOrderSuccesskelompok3 {
            border-color: #f5d6b8;
            background: #fff8ef;
        }

        /* =====================================
           FOTO PROFIL NIM 662
        ===================================== */

        .preOrderProfilekelompok3 {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 24px;
        }

        .preOrderProfilekelompok3 img {
            display: block;
            width: 110px;
            height: 110px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid var(--cream-dark);
        }

        .preOrderProfileInfoKelompok3 {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .preOrderProfileInfoKelompok3 strong {
            color: var(--brown);
            font-size: 18px;
        }

        .preOrderProfileInfoKelompok3 span {
            color: var(--brown-soft);
            font-size: 13px;
        }

        /* NIM GENAP: TEPAT 250PX MENJADI KOTAK */

        @media (max-width: 250px) {
            .preOrderProfilekelompok3 img {
                border-radius: 0;
            }
        }

        @media (max-width: 720px) {
            .preOrderWrapperkelompok3 {
                width: min(100% - 32px, 900px);
                padding-top: 24px;
            }

            .preOrderReceiptRowkelompok3 {
                flex-direction: column;
                gap: 4px;
            }
        }
    </style>
    <?php
    return;
}

$menuHarga2413010662 = [
    'Ayam Bakar' => 25000,
    'Gado-gado' => 15000,
    'Lotek' => 14000,
    'Selat' => 22000,
    'Sop Ayam' => 18000,
    'Sop Galantin' => 20000,
];

$nama2413010662 = '';
$menuDipilih2413010662 = '';
$jumlah2413010662 = 1;
$tanggal2413010662 = '';
$catatan2413010662 = '';
$pesananValid2413010662 = false;
$pesanError2413010662 = '';

if (
    ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST'
    && isset($_POST['preorder_submit_2413010662'])
) {
    $namaInput = $_POST['nama2413010662'] ?? '';
    $menuInput = $_POST['menu2413010662'] ?? '';
    $jumlahRaw = $_POST['jumlah2413010662'] ?? '';
    $tanggalInput = $_POST['tanggal2413010662'] ?? '';
    $catatanInput = $_POST['catatan2413010662'] ?? '';

    $nama2413010662 = is_string($namaInput) ? trim($namaInput) : '';
    $menuDipilih2413010662 = is_string($menuInput) ? $menuInput : '';
    $tanggal2413010662 = is_string($tanggalInput) ? trim($tanggalInput) : '';
    $catatan2413010662 = is_string($catatanInput) ? trim($catatanInput) : '';

    $jumlahInput = is_string($jumlahRaw)
        ? filter_var($jumlahRaw, FILTER_VALIDATE_INT)
        : false;

    if ($nama2413010662 === '') {
        $pesanError2413010662 = 'Nama wajib diisi.';
    } elseif (!array_key_exists($menuDipilih2413010662, $menuHarga2413010662)) {
        $pesanError2413010662 = 'Silakan pilih menu yang tersedia.';
    } elseif ($jumlahInput === false || $jumlahInput < 1 || $jumlahInput > 20) {
        $pesanError2413010662 = 'Jumlah harus antara 1 sampai 20.';
    } elseif ($tanggal2413010662 === '') {
        $pesanError2413010662 = 'Tanggal pengambilan wajib diisi.';
    } else {
        $jumlah2413010662 = $jumlahInput;
        $pesananValid2413010662 = true;
    }
}

$rupiah2413010662 = static function (int $nilai): string {
    return 'Rp' . number_format($nilai, 0, ',', '.');
};
?>

<section
    class="preOrderWrapperkelompok3"
    aria-labelledby="preOrderTitlekelompok3"
>
    <section class="preOrderPanelkelompok3">

        <!-- FOTO PROFIL -->
        <div class="preOrderProfilekelompok3">
            <img
                src="assets/images/hadezz-store.png"
                alt="Foto profil Hadezz"
            >

            <div class="preOrderProfileInfoKelompok3">
                <strong>Hadezz</strong>
                <span>Mahasiswa</span>
                <span>NIM: 2413010662</span>
            </div>
        </div>

        <p class="preOrderEyebrowkelompok3">Pre-Order</p>

        <h2 id="preOrderTitlekelompok3">
            Pesan lebih awal
        </h2>

        <p class="preOrderIntrokelompok3">
            Pilih menu favorit lebih awal agar makanan siap saat kamu tiba.
        </p>

        <?php if ($pesanError2413010662 !== ''): ?>
            <p class="preOrderErrorkelompok3" role="alert">
                <?= htmlspecialchars($pesanError2413010662, ENT_QUOTES, 'UTF-8') ?>
            </p>
        <?php endif; ?>

        <form
            class="preOrderFormkelompok3"
            method="post"
            action="kelompok3.php?reservasi=pre-order"
        >
            <label>
                Nama
                <input
                    name="nama2413010662"
                    type="text"
                    maxlength="100"
                    required
                    value="<?= htmlspecialchars($nama2413010662, ENT_QUOTES, 'UTF-8') ?>"
                >
            </label>

            <label>
                Menu
                <select name="menu2413010662" required>
                    <option value="">Pilih menu</option>

                    <?php foreach ($menuHarga2413010662 as $nm => $hr): ?>
                        <option
                            value="<?= htmlspecialchars($nm, ENT_QUOTES, 'UTF-8') ?>"
                            <?= $menuDipilih2413010662 === $nm ? 'selected' : '' ?>
                        >
                            <?= htmlspecialchars($nm, ENT_QUOTES, 'UTF-8') ?>
                            — <?= $rupiah2413010662($hr) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </label>

            <label>
                Jumlah
                <input
                    name="jumlah2413010662"
                    type="number"
                    min="1"
                    max="20"
                    required
                    value="<?= htmlspecialchars((string) $jumlah2413010662, ENT_QUOTES, 'UTF-8') ?>"
                >
            </label>

            <label>
                Tanggal Ambil
                <input
                    name="tanggal2413010662"
                    type="date"
                    required
                    value="<?= htmlspecialchars($tanggal2413010662, ENT_QUOTES, 'UTF-8') ?>"
                >
            </label>

            <label>
                Catatan (opsional)
                <textarea
                    name="catatan2413010662"
                    placeholder="Contoh: tanpa sambal"
                ><?= htmlspecialchars($catatan2413010662, ENT_QUOTES, 'UTF-8') ?></textarea>
            </label>

            <button
                class="preOrderButtonkelompok3"
                type="submit"
                name="preorder_submit_2413010662"
            >
                Pesan Pre-Order
            </button>
        </form>
    </section>

    <?php if ($pesananValid2413010662): ?>
        <?php
        $total2413010662 =
            $menuHarga2413010662[$menuDipilih2413010662] * $jumlah2413010662;
        ?>

        <section
            class="preOrderPanelkelompok3"
            aria-labelledby="strukPreOrderkelompok3"
        >
            <p class="preOrderEyebrowkelompok3">Struk Pre-Order</p>

            <h2 id="strukPreOrderkelompok3">
                Ringkasan pesanan
            </h2>

            <div class="preOrderReceiptRowkelompok3">
                <span>Nama</span>
                <strong><?= htmlspecialchars($nama2413010662, ENT_QUOTES, 'UTF-8') ?></strong>
            </div>

            <div class="preOrderReceiptRowkelompok3">
                <span>Menu</span>
                <strong><?= htmlspecialchars($menuDipilih2413010662, ENT_QUOTES, 'UTF-8') ?></strong>
            </div>

            <div class="preOrderReceiptRowkelompok3">
                <span>Jumlah</span>
                <strong><?= $jumlah2413010662 ?></strong>
            </div>

            <div class="preOrderReceiptRowkelompok3">
                <span>Tanggal Ambil</span>
                <strong><?= htmlspecialchars($tanggal2413010662, ENT_QUOTES, 'UTF-8') ?></strong>
            </div>

            <?php if ($catatan2413010662 !== ''): ?>
                <div class="preOrderReceiptRowkelompok3">
                    <span>Catatan</span>
                    <strong><?= htmlspecialchars($catatan2413010662, ENT_QUOTES, 'UTF-8') ?></strong>
                </div>
            <?php endif; ?>

            <p class="preOrderReceiptTotalkelompok3">
                Total: <?= $rupiah2413010662($total2413010662) ?>
            </p>

            <p class="preOrderReceiptNotekelompok3">
                Pesanan pre-order akan disiapkan sesuai tanggal yang dipilih.
            </p>
        </section>

        <section class="preOrderPanelkelompok3 preOrderSuccesskelompok3">
            <h2>Pre-Order berhasil!</h2>

            <p>
                Terima kasih, <?= htmlspecialchars($nama2413010662, ENT_QUOTES, 'UTF-8') ?>.
                Pesananmu sudah tercatat.
            </p>
        </section>
    <?php endif; ?>
</section>