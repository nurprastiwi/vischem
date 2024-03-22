<?php include_once("inc_header.php") ?>
<!-- untuk courses -->
<section id="disclearn">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('13') ?></p>
        <h2><?php echo ambil_judul('13') ?></h2>
        <?php echo maximum_kata(ambil_isi('13'), 30) ?>
        <p><a href="<?php echo buat_link_halaman('13') ?>" class="tbl-biru">Selanjutnya </a></p>
    </div>
    <img src="<?php echo ambil_gambar('13') ?>" />
</section>
<?php include_once("inc_footer.php") ?> 