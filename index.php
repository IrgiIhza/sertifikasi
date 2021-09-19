<?php
include './config/conn.php';
?>
<!-- EOF PHP -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikasi Profesi</title>

    <!-- Javascript JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Javascript Bootstrap -->
    <script src="assets/vendors/bootstrap-4.6/js/bootstrap.min.js"></script>

    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="assets/vendors/bootstrap-4.6/css/bootstrap.min.css">
    <!-- CSS Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="icon" href="assets/img/logo/sertifikasi.png" type="image/ico">

    <style>
        li {
            list-style-type: none;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <div class="nav-item nav-link float-left">
            <a href="#">
                <img src="assets/img/logo/sertifikasi.png" class="border border-dark rounded-circle ml-lg-3" width="70" height="70">
            </a>
            <span class="ml-lg-3 d-block float-right text-light">Lembaga<br>Sertifikasi<br>Profesi</span>
        </div>
        <ul class="mt-lg-3">
            <li class="float-left">
                <a class="nav-item nav-link p-2 text-light font-weight-bold" href="index.php">HOME</a>
            </li>
            <li class="float-lg-left">
                <a class="nav-item nav-link p-2 text-light font-weight-bold" href="index.php?p=profil">PROFIL</a>
            </li>
            <li class="dropdown float-lg-left">
                <a class="nav-item nav-link p-2 text-light dropdown-toggle font-weight-bold" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MEDIA</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item button" href="https://www.instagram.com/irgiihza_/">INSTAGRAM</a>
                    <a class="dropdown-item button" href="https://www.facebook.com/ihza.ihza.5">FACEBOOK</a>
                    <a class="dropdown-item button" href="https://www.youtube.com/channel/UCUWO8GxS3OpuOY2DlecR7qg">YOUTUBE</a>
                </div>
            </li>
            <li class="dropdown float-lg-left">
                <a class="nav-item nav-link p-2 text-light dropdown-toggle font-weight-bold" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">INFORMASI</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                    <a class="dropdown-item button" href="index.php?p=lembaga">Lembaga Diklat</a>
                    <a class="dropdown-item button" href="index.php?p=event">Event</a>
                </div>
            </li>
            <li class="float-lg-left mr-lg-5">
                <a class="nav-item nav-link p-2 text-white font-weight-bold" href="login.php">Login</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse border shadow">
                <div class="sidebar-sticky pt-3">
                    <ul class="navbar-nav">
                        <span>Sertifikasi</span>
                        <li class="nav-item active mb-md-3 ml-md-1">
                            <a class="nav-link text-secondary" href="index.php?p=skema"><i class="fas fa-file-alt"></i> Skema Sertifikasi</a>
                        </li>
                        <li class="nav-item active mb-md-3 ml-md-1">
                            <a class="nav-link text-secondary" href="index.php?p=jadwal"><i class="fas fa-file-alt"></i> Jadwal Asesmen</a>
                        </li>
                        <li class="nav-item active mb-md-3 ml-md-1">
                            <a class="nav-link text-secondary" href="index.php?p=asesor"><i class="fas fa-file-alt"></i> Asesor Kompetensi</a>
                        </li>
                        <li class="nav-item active mb-md-3 ml-md-1">
                            <a class="nav-link text-secondary" href="index.php?p=permohonan"><i class="fas fa-file-alt"></i> Permohonan Sertifikat</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="container col-md-9 ml-sm-auto col-lg-10 px-md-3 bg-white shadow">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-10 border-bottom">
                    <!-- Dynamic Content -->
                    <?php
                    $pages_dir = 'pages';
                    if (!empty($_GET['p'])) {
                        $pages = scandir($pages_dir, 0);
                        unset($pages[0], $pages[1]);
                        $p = $_GET['p'];
                        if (in_array($p . '.php', $pages)) {
                            include($pages_dir . '/' . $p . '.php');
                        } else {
                            include($pages_dir . '/404.php');
                        }
                    } else {
                        include($pages_dir . '/home.php');
                    }
                    ?>
                    <!-- Baris Akhir Dynamic Content -->
                </div>
            </main>
        </div>
    </div>

</body>

</html>
<!-- EOF HTML -->