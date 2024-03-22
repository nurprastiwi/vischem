<?php include_once("inc_header.php") ?>
<!-- untuk courses -->
<section id="stimulasi">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('9') ?></p>
        <h2><?php echo ambil_judul('9') ?></h2>
        <?php echo maximum_kata(ambil_isi('9'), 30) ?>
        <p><a href="<?php echo buat_link_halaman('10') ?>" class="tbl-biru">Selanjutnya </a></p>
    </div>
    <img src="<?php echo ambil_gambar('9') ?>" />
</section>
<?php include_once("inc_footer.php") ?>