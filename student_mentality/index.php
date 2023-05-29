<?php
session_start();

if (isset($_GET['page']) && $_GET['page'] === 'logout') {
    session_destroy();
    header("Location: login.php");
    exit;
}

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mentality</title>

    <!-- My Style -->
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="image/logoweb.png">
</head>

<body>


    <!-- Navbar start -->
    <header>
        <nav class="navbar">
            <img src="image/logoweb.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
            <a href="#" class="navbar-logo">Student<span>Mentality</span>.</a>

            <div class="navbar-nav">
                <a href="home.php">Home</a>
                <a href="insight.php">Daily Insight</a>
                <a href="forum.php">Forum Mahasiswa</a>
                <a href="service.php">Service</a>
                <a href="logout.php">Log Out</a>
            </div>
            <div class="menu-toggle">
                <i class="fa fa-bars"></i>
            </div>
        </nav>
    </header>
    <!-- Navbar end -->

    <!-- Hero Section start -->
    <section id="hero" class="hero">
        <div class="row">
        <div class="content">
            <h2>Selamat Datang Di,</h2>
            <h1>Student Mentality <span>Health Servis.</span></h1>
            <p>Website Mental Health ini adalah sebuah web yang dirancang khusus untuk membantu para mahasiswa dalam mengatasi masalah kesehatan mental mereka. Website ini memiliki fitur-fitur yang dapat membantu mengidentifikasi masalah kesehatan mental yang umum dihadapi oleh mahasiswa dan memberikan saran
                untuk mengatasi masalah tersebut.</p>
            <a href="#" class="oval-button">Baca Selengkapnya</a>
        </div>
        <div class="hero-img">
            <img src="image/home.png" />
        </div>
        </div>
    </section>
    <!-- Hero Section end -->

    <!-- Fitur Section start -->
    <section id="fitur" class="fitur">
    <div class="content">
        <h1><center>Perkenalan Fitur</center></h1>
        <div class="fitur-img">
            <div class="grid-item">
                <img src="image/layanan1.png" />
                <h3>Mental Health Test</h3>
            </div>
            <div class="grid-item">
                <img src="image/layanan2.png" />
                <h3>Overthinking</h3>
            </div>
            <div class="grid-item">
                <img src="image/layanan3.png" />
                <h3>Konseling</h3>
            </div>
            <div class="grid-item">
                <img src="image/layanan4.png" />
                <h3>Forum Mahasiswa</h3>
            </div>
            </div>
        </div>
    </section>
    <!-- Fitur Section end -->

    <section id="home" class="home">
    <div class="content">
        <h2>Mental Health Test</h2>
    </div>
    </section>
        


    <div id=" contents">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 'home':
                    include "home.php";
                    break;
                case 'insight':
                    include "insight.php";
                    break;
                case 'forum':
                    include "forum.php";
                    break;
                case 'service':
                    include "service.php";
                    break;
            }
        } else {
            include "home.php";
        }
        ?>
    </div>

</body>

</html>