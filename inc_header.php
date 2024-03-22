<?php 
session_start();
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISCHEM Belajar Kimia</title>
    <link rel="stylesheet" href="<?php echo url_dasar()?>/css/style.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href='<?php echo url_dasar()?>'>VISCHEM</a></div>
            <div class="menu">
                <ul>
                    <li><a href="<?php echo url_dasar()?>#beranda">Beranda</a></li>
                    <li><a href="index1.php #stimulasi">Stimulasi</a></li>
                    <li><a href="index2.php #identifikasi">Identifikasi</a></li>
                    <li><a href="index3.php #litview">Literature Review</a></li>
                    <li><a href="index4.php #verifikasi">Verifikasi 1</a></li>
                    <li><a href="index5.php #verifikasi">Verifikasi 2</a></li>
                    <li>
                    <?php if(isset($_SESSION['members_nama_lengkap'])){
                        echo "<a href='".url_dasar()."/ganti_profile.php'>".$_SESSION['members_nama_lengkap']."</a> | <a href='".url_dasar()."/logout.php'>Logout</a>";
                    }else{?>
                        <a href="pendaftaran.php" class="tbl-biru">Masuk</a>
                    <?php } ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">