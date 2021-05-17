<?php
    session_start();
    if (!isset($_SESSION['user']))
    {
        header("location: login.php");
    }
?>

<!doctype html>
<html lang="en">
<head>

    <!-- Favicons -->
    <link href="assets/img/faviconlearnit.jpg" rel="icon">
    <link href="assets/img/learnit.ico" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Inloggen</title>

</head>

<body>

<!--HEADER-->
<header id="header">
    <?php include_once 'inc/header.php' ?>
</header>

<main style="text-align: center; margin-top: 100px;">
    <h1>Welkom!</h1>
    <span class="user"><?= $_SESSION['user']?></span>
</main>

<!--FOOTER-->
<footer class="fixed-bottom position-fixed" id="footer">

    <div style="background-color: #37517e" class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 footer-contact">
                    <h3 style="color: white">Learn IT</h3>
                    <p style="color: white">
                        Rachelmolen R10<br>
                        Eindhoven, 5623PE<br>
                        Netherlands <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>

                <div class="col-lg-4 footer-links">
                    <h4 style="color: white">Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a style="color: white" href="index.php#hero">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a style="color: white" href="index.php#about">Over Ons</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a style="color: white" href="index.php#voordelen">Voordelen</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a style="color: white" href="index.php#team">Team</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a style="color: white" href="index.php#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 footer-links">
                    <h4 style="color: white">Social Media</h4>
                    <p style="color: white">Check hieronder nogmaals onze promo video!</p>
                    <div class="social-links mt-3">
                        <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>