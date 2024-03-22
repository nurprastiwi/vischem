<?php include_once("inc_header.php") ?>
<!-- untuk courses -->
<section id="disclearn">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('12') ?></p>
        <h2><?php echo ambil_judul('12') ?></h2>
        <?php echo maximum_kata(ambil_isi('12'), 30) ?>
        <p><a href="<?php echo buat_link_halaman('12') ?>" class="tbl-biru">Selanjutnya </a></p>
    </div>
    <img src="<?php echo ambil_gambar('12') ?>" />
</section>
<?php include_once("inc_footer.php") ?> 