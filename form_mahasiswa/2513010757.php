<?php
if (!empty($reservasiBookingStyles)) {
    ?>
    <style>
        .bookingWrapperkelompok3 {
            width: min(100% - 64px, 900px);
            margin: 0 auto;
            padding: 36px 0 70px;
            color: #512719;
        }

        .bookingPanelkelompok3 {
            margin-bottom: 20px;
            padding: clamp(24px, 5vw, 40px);
            border: 1px solid rgba(100, 63, 39, 0.08);
            border-radius: 20px;
            background: #fffefd;
            box-shadow: 0 12px 34px rgba(83, 52, 27, 0.08);
        }

        .bookingEyebrowkelompok3 {
            margin: 0 0 8px;
            color: #c90f2f;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .bookingPanelkelompok3 h2 {
            margin: 0 0 12px;
            font-size: clamp(28px, 5vw, 40px);
        }

        .bookingIntrokelompok3,
        .bookingReceiptNotekelompok3 {
            color: #75594e;
            line-height: 1.6;
        }

        .bookingFormkelompok3 {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
            margin-top: 26px;
        }

        .bookingFormkelompok3 label {
            display: grid;
            gap: 8px;
            font-weight: 700;
        }

        .bookingFormkelompok3 input,
        .bookingFormkelompok3 select {
            width: 100%;
            min-height: 48px;
            padding: 10px 12px;
            border: 1px solid #dfcdb8;
            border-radius: 10px;
            background: #fff;
            color: #512719;
            font: inherit;
        }

        .bookingFormkelompok3 input:focus,
        .bookingFormkelompok3 select:focus {
            outline: 3px solid rgba(201, 15, 47, 0.18);
            border-color: #c90f2f;
        }

        .bookingFormkelompok3 .bookingFullkelompok3 {
            grid-column: 1 / -1;
        }

        .bookingButtonkelompok3 {
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

        .bookingButtonkelompok3:hover {
            background: #a90926;
        }

        .bookingErrorkelompok3 {
            margin: 18px 0 0;
            padding: 12px 14px;
            border-radius: 10px;
            background: #fff0f0;
            color: #a90926;
        }

        .bookingReceiptRowkelompok3 {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            padding: 12px 0;
            border-bottom: 1px solid #efdfc8;
        }

        .bookingSuccesskelompok3 {
            border-color: #b7ddbe;
            background: #f1fff3;
        }

        .bookingSuccesskelompok3 h2 {
            color: #26733a;
        }

        @media (max-width: 720px) {
            .bookingWrapperkelompok3 {
                width: min(100% - 32px, 900px);
                padding-top: 24px;
            }

            .bookingFormkelompok3 {
                grid-template-columns: 1fr;
            }

            .bookingFormkelompok3 .bookingFullkelompok3 {
                grid-column: auto;
            }

            .bookingReceiptRowkelompok3 {
                flex-direction: column;
                gap: 4px;
            }
        }
    </style>
    <?php
    return;
}

$areaBooking2513010757 = ['Lesehan', 'Meja', 'Area Outdoor', 'Meja Indoor'];
$namaBooking2513010757 = '';
$tanggalBooking2513010757 = '';
$jamBooking2513010757 = '';
$jumlahBooking2513010757 = 1;
$areaDipilih2513010757 = '';
$bookingValid2513010757 = false;
$pesanErrorBooking2513010757 = '';

if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    $namaInputBooking2513010757 = $_POST['nama2513010757'] ?? '';
    $tanggalInputBooking2513010757 = $_POST['tanggal2513010757'] ?? '';
    $jamInputBooking2513010757 = $_POST['jam2513010757'] ?? '';
    $jumlahInputBooking2513010757 = $_POST['jumlah2513010757'] ?? '';
    $areaInputBooking2513010757 = $_POST['area2513010757'] ?? '';

    $namaBooking2513010757 = is_string($namaInputBooking2513010757) ? trim($namaInputBooking2513010757) : '';
    $tanggalBooking2513010757 = is_string($tanggalInputBooking2513010757) ? $tanggalInputBooking2513010757 : '';
    $jamBooking2513010757 = is_string($jamInputBooking2513010757) ? $jamInputBooking2513010757 : '';
    $areaDipilih2513010757 = is_string($areaInputBooking2513010757) ? $areaInputBooking2513010757 : '';
    $jumlahParsedBooking2513010757 = is_string($jumlahInputBooking2513010757)
        ? filter_var($jumlahInputBooking2513010757, FILTER_VALIDATE_INT)
        : false;

    $tanggalValidBooking2513010757 = false;
    if (preg_match('/^\d{4}-\d{2}-\d{2}$/D', $tanggalBooking2513010757) === 1) {
        [$tahunBooking2513010757, $bulanBooking2513010757, $hariBooking2513010757] =
            array_map('intval', explode('-', $tanggalBooking2513010757));
        $tanggalValidBooking2513010757 = checkdate(
            $bulanBooking2513010757,
            $hariBooking2513010757,
            $tahunBooking2513010757
        );
    }

    if ($namaBooking2513010757 === '' || strlen($namaBooking2513010757) > 100) {
        $pesanErrorBooking2513010757 = 'Nama pemesan wajib diisi (maksimal 100 karakter).';
    } elseif (!$tanggalValidBooking2513010757) {
        $pesanErrorBooking2513010757 = 'Silakan masukkan tanggal booking yang valid.';
    } elseif (preg_match('/^(?:[01]\d|2[0-3]):[0-5]\d$/D', $jamBooking2513010757) !== 1) {
        $pesanErrorBooking2513010757 = 'Silakan masukkan jam kedatangan yang valid.';
    } elseif (
        $jumlahParsedBooking2513010757 === false
        || $jumlahParsedBooking2513010757 < 1
        || $jumlahParsedBooking2513010757 > 50
    ) {
        $pesanErrorBooking2513010757 = 'Jumlah orang harus antara 1 sampai 50.';
    } elseif (!in_array($areaDipilih2513010757, $areaBooking2513010757, true)) {
        $pesanErrorBooking2513010757 = 'Silakan pilih area yang tersedia.';
    } else {
        $jumlahBooking2513010757 = $jumlahParsedBooking2513010757;
        $bookingValid2513010757 = true;
    }
}
?>
<section class="bookingWrapperkelompok3" aria-labelledby="bookingTitlekelompok3">
    <section class="bookingPanelkelompok3">
        <p class="bookingEyebrowkelompok3">Booking Meja</p>
        <h2 id="bookingTitlekelompok3">Siapkan tempat untuk kunjunganmu</h2>
        <p class="bookingIntrokelompok3">
            Isi detail kedatangan dan kami siapkan tempat yang nyaman untuk Anda.
        </p>

        <?php if ($pesanErrorBooking2513010757 !== ''): ?>
            <p class="bookingErrorkelompok3" role="alert">
                <?= htmlspecialchars($pesanErrorBooking2513010757, ENT_QUOTES, 'UTF-8') ?>
            </p>
        <?php endif; ?>

        <form class="bookingFormkelompok3" method="post" action="kelompok3.php?reservasi=booking">
            <label class="bookingFullkelompok3" for="nama2513010757kelompok3">
                Nama pemesan
                <input id="nama2513010757kelompok3" name="nama2513010757" type="text" maxlength="100" required
                    autocomplete="name"
                    value="<?= htmlspecialchars($namaBooking2513010757, ENT_QUOTES, 'UTF-8') ?>">
            </label>

            <label for="tanggal2513010757kelompok3">
                Tanggal
                <input id="tanggal2513010757kelompok3" name="tanggal2513010757" type="date" required
                    value="<?= htmlspecialchars($tanggalBooking2513010757, ENT_QUOTES, 'UTF-8') ?>">
            </label>

            <label for="jam2513010757kelompok3">
                Jam kedatangan
                <input id="jam2513010757kelompok3" name="jam2513010757" type="time" required
                    value="<?= htmlspecialchars($jamBooking2513010757, ENT_QUOTES, 'UTF-8') ?>">
            </label>

            <label for="jumlah2513010757kelompok3">
                Jumlah orang
                <input id="jumlah2513010757kelompok3" name="jumlah2513010757" type="number" min="1" max="50" required
                    value="<?= htmlspecialchars((string) $jumlahBooking2513010757, ENT_QUOTES, 'UTF-8') ?>">
            </label>

            <label for="area2513010757kelompok3">
                Area
                <select id="area2513010757kelompok3" name="area2513010757" required>
                    <option value="">Pilih area</option>
                    <?php foreach ($areaBooking2513010757 as $areaBookingOption2513010757): ?>
                        <option value="<?= htmlspecialchars($areaBookingOption2513010757, ENT_QUOTES, 'UTF-8') ?>"
                            <?= $areaDipilih2513010757 === $areaBookingOption2513010757 ? 'selected' : '' ?>>
                            <?= htmlspecialchars($areaBookingOption2513010757, ENT_QUOTES, 'UTF-8') ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </label>

            <button class="bookingButtonkelompok3 bookingFullkelompok3" type="submit">
                Simpan reservasi
            </button>
        </form>
    </section>

    <?php if ($bookingValid2513010757): ?>
        <section class="bookingPanelkelompok3" aria-labelledby="bookingReceiptTitlekelompok3">
            <p class="bookingEyebrowkelompok3">Struk Booking</p>
            <h2 id="bookingReceiptTitlekelompok3">Reservasi berhasil dicatat</h2>
            <div class="bookingReceiptRowkelompok3">
                <span>Nama pemesan</span>
                <strong><?= htmlspecialchars($namaBooking2513010757, ENT_QUOTES, 'UTF-8') ?></strong>
            </div>
            <div class="bookingReceiptRowkelompok3">
                <span>Tanggal</span>
                <strong><?= htmlspecialchars(date('d-m-Y', strtotime($tanggalBooking2513010757)), ENT_QUOTES, 'UTF-8') ?></strong>
            </div>
            <div class="bookingReceiptRowkelompok3">
                <span>Jam kedatangan</span>
                <strong><?= htmlspecialchars($jamBooking2513010757, ENT_QUOTES, 'UTF-8') ?></strong>
            </div>
            <div class="bookingReceiptRowkelompok3">
                <span>Jumlah orang</span>
                <strong><?= $jumlahBooking2513010757 ?> orang</strong>
            </div>
            <div class="bookingReceiptRowkelompok3">
                <span>Area</span>
                <strong><?= htmlspecialchars($areaDipilih2513010757, ENT_QUOTES, 'UTF-8') ?></strong>
            </div>
            <p class="bookingReceiptNotekelompok3">
                Simpan ringkasan ini sebagai bukti booking. Reservasi ini tidak memproses pembayaran.
            </p>
        </section>

        <section class="bookingPanelkelompok3 bookingSuccesskelompok3" aria-live="polite">
            <h2>Terima kasih sudah melakukan booking!</h2>
            <p>Tempat akan disiapkan sesuai detail kunjungan Anda.</p>
        </section>
    <?php endif; ?>
</section>
