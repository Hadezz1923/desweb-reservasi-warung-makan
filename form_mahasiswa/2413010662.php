<?php
$menuPreOrder2413010662 = ['Ayam Bakar','Gado-gado','Lotek','Selat','Sop Ayam','Sop Galantin'];
$kodeBooking2413010662 = ''; $paketMakanan2413010662 = ''; $porsiMakanan2413010662 = ''; $catatanKhusus2413010662 = '';
$preOrderValid2413010662 = false; $pesanErrorPreOrder2413010662 = '';
if (($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST') {
    $kodeBooking2413010662 = trim($_POST['kodebooking2413010662'] ?? '');
    $paketMakanan2413010662 = $_POST['paketmakanan2413010662'] ?? '';
    $porsiMakanan2413010662 = $_POST['porsimakanan2413010662'] ?? '';
    $catatanKhusus2413010662 = trim($_POST['catatankhusus2413010662'] ?? '');
    $porsiValid = filter_var($porsiMakanan2413010662, FILTER_VALIDATE_INT);
    if ($kodeBooking2413010662 === '') $pesanErrorPreOrder2413010662 = 'Kode booking wajib diisi.';
    elseif (!in_array($paketMakanan2413010662, $menuPreOrder2413010662, true)) $pesanErrorPreOrder2413010662 = 'Pilih paket makanan.';
    elseif ($porsiValid === false || $porsiValid < 1) $pesanErrorPreOrder2413010662 = 'Porsi minimal 1.';
    else { $porsiMakanan2413010662 = (string)$porsiValid; $preOrderValid2413010662 = true; }
}
?>
<section class="pembayaranWrapperkelompok3" aria-labelledby="preOrderTitlekelompok3">
    <section class="pembayaranPanelkelompok3">
        <p class="pembayaranEyebrowkelompok3">Pre-Order</p>
        <h2 id="preOrderTitlekelompok3">Pesan menu lebih awal</h2>
        <p class="pembayaranIntrokelompok3">Isi data pre-order untuk mencatat pesanan sebelum kunjungan.</p>
        <?php if ($pesanErrorPreOrder2413010662 !== ''): ?><p class="pembayaranErrorkelompok3" role="alert"><?= htmlspecialchars($pesanErrorPreOrder2413010662, ENT_QUOTES, 'UTF-8') ?></p><?php endif; ?>
        <form class="pembayaranFormkelompok3" method="post" action="kelompok3.php?reservasi=pre-order">
            <label>Kode Booking<input name="kodebooking2413010662" type="text" required value="<?= htmlspecialchars($kodeBooking2413010662, ENT_QUOTES, 'UTF-8') ?>"></label>
            <label>Paket Makanan<select name="paketmakanan2413010662" required><option value="">Pilih paket makanan</option><?php foreach($menuPreOrder2413010662 as $m):?><option value="<?= $m ?>" <?= $paketMakanan2413010662===$m?'selected':'' ?>><?= $m ?></option><?php endforeach;?></select></label>
            <label>Porsi Makanan<input name="porsimakanan2413010662" type="number" min="1" required value="<?= htmlspecialchars($porsiMakanan2413010662, ENT_QUOTES, 'UTF-8') ?>"></label>
            <label>Catatan Khusus<textarea name="catatankhusus2413010662" rows="4"><?= htmlspecialchars($catatanKhusus2413010662, ENT_QUOTES, 'UTF-8') ?></textarea></label>
            <button class="pembayaranButtonkelompok3" type="submit">Kirim Pre-Order</button>
        </form>
    </section>
    <?php if($preOrderValid2413010662):?><section class="pembayaranPanelkelompok3 pembayaranSuccesskelompok3" style="margin-top:20px"><p class="pembayaranEyebrowkelompok3">Bukti Pre-Order Sukses</p><h2>Pesanan berhasil dicatat</h2><div class="pembayaranReceiptRowkelompok3"><span>Kode Booking</span><strong><?= htmlspecialchars($kodeBooking2413010662, ENT_QUOTES, 'UTF-8') ?></strong></div><div class="pembayaranReceiptRowkelompok3"><span>Paket</span><strong><?= htmlspecialchars($paketMakanan2413010662, ENT_QUOTES, 'UTF-8') ?></strong></div><div class="pembayaranReceiptRowkelompok3"><span>Porsi</span><strong><?= htmlspecialchars($porsiMakanan2413010662, ENT_QUOTES, 'UTF-8') ?></strong></div><div class="pembayaranReceiptRowkelompok3"><span>Catatan</span><strong><?= $catatanKhusus2413010662!==''?htmlspecialchars($catatanKhusus2413010662, ENT_QUOTES, 'UTF-8'):'-' ?></strong></div></section><?php endif;?>
</section>