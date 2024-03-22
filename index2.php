<?php include_once("inc_header.php") ?>
<!-- untuk courses -->
<section id="identifikasi">
    <div class="kolom">
        <p class="deskripsi"><?php echo ambil_kutipan('11') ?></p>
        <h2><?php echo ambil_judul('11') ?></h2>
        <?php echo maximum_kata(ambil_isi('11'), 30) ?>
        <p><a href="<?php echo buat_link_halaman('11') ?>" class="tbl-biru">Selanjutnya </a></p>
</div>
</section>
<?php include_once("inc_footer.php") ?>