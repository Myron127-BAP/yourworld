<?php

session_start();
error_reporting(0);
include_once 'func/database.func.php';
include_once 'func/welcomemessage.func.php';
if (!isset($_SESSION['userStudent']))
{
    header("location: studentlogin.php");
}

$hygiene = rand(0,100);
$energie = rand(0,100);
$honger = rand(0, 100);
$fun = rand(0,100);
$social = rand(0, 100);
$groeneEnergie = rand(0, 100);

$c02 = rand(0, 100);
$watervervuiling = rand(0, 100);
$zwerfafval = rand(0, 100);
$criminaliteit = rand(0, 100);

if ($hygiene < 50)
{
    $statusHygiene = "Je <b>HYGIËNE</b> is erg laag, je voelt je <b>VIES</b>";
}
if ($energie < 50)
{
    $statusEnergie = "Je <b>ENERGIE</b> is erg laag, je voelt je <b>MOE</b>";
}
if ($honger < 50)
{
    $statusHonger = "Je <b>HONGER</b> is erg laag, je voelt je <b>HONGERIG</b>";
}
if ($fun < 50)
{
    $statusFun = "Je <b>FUN</b> is erg laag, je voelt je <b>VERVEELD</b>";
}
if ($social < 50)
{
    $statusSocial = "Je <b>SOCIAL</b> is erg laag, je voelt je <b>ALLEEN</b>";
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

    <title><?php echo $_SESSION['userStudent'] ?></title>

</head>

<body>

<!--HEADER-->
<header id="header">
    <?php include_once 'inc/header.php' ?>
</header>

<main>
    <div class="container">
        <div class="row">
            <div style="text-align: center" class="col-xs-12">
                <h1 style="margin-top: 10px;"><?php echo $welcome;?></h1>
                <h1 style="color: #3cc187; margin-top: -14px;" class="user"><?= $_SESSION['userStudent']?></h1>
                <h4><?php echo $statusHygiene; ?></h4>
                <h4><?php echo $statusEnergie; ?></h4>
                <h4><?php echo $statusHonger; ?></h4>
                <h4><?php echo $statusFun; ?></h4>
                <h4><?php echo $statusSocial; ?></h4>
            </div>
                <div class="col-md-3">
                    <section id="skills" class="skills">
                        <div class="col-xs-12 content"> <!--data-aos="fade-left"-->
                            <h3>Dit zijn je huidige statistieken</h3>
                            <div class="skills-content">
                                <div class="progress">
                                    <span class="skill">Hygiëne <i class="val"><?php echo $hygiene?>%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div style="width: <?php echo $hygiene?>%"  class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <span class="skill">Energie <i class="val"><?php echo $energie?>%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div style="width: <?php echo $energie?>%"  class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <span class="skill">Honger <i class="val"><?php echo $honger?>%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div style="width: <?php echo $honger?>%"  class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <span class="skill">Fun  <i class="val"><?php echo $fun?>%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div style="width: <?php echo $fun?>%" class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                                <div class="progress">
                                    <span class="skill">Social  <i class="val"><?php echo $social?>%</i></span>
                                    <div class="progress-bar-wrap">
                                        <div style="width: <?php echo $social?>%" class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                    </section>
                </div>
            <div style="margin-top: -30px;" class="col-md-3 offset-6">
                <img src="assets/img/team/player.png">
            </div>
            <div class="col-xs-12" style="text-align: center">
                <section id="skills" class="skills">
                    <div class="col-xs-12 content"> <!--data-aos="fade-left"-->
                        <h3 style="text-align: center">Dit zijn je statistieken van je wereld</h3>
                        <div class="skills-content">
                            <div class="progress">
                                <span class="skill">C02 Uitstoot <i class="val"><?php echo $c02?>%</i></span>
                                <div class="progress-bar-wrap">
                                    <div style="width: <?php echo $c02?>%"  class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill">Watervervuiling <i class="val"><?php echo $watervervuiling?>%</i></span>
                                <div class="progress-bar-wrap">
                                    <div style="width: <?php echo $watervervuiling?>%"  class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill">Zwerfafval<i class="val"><?php echo $zwerfafval?>%</i></span>
                                <div class="progress-bar-wrap">
                                    <div style="width: <?php echo $zwerfafval?>%"  class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill">Criminaliteit <i class="val"><?php echo $criminaliteit?>%</i></span>
                                <div class="progress-bar-wrap">
                                    <div style="width: <?php echo $criminaliteit?>%" class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress">
                                <span class="skill">Groene Energie  <i class="val"><?php echo $groeneEnergie?>%</i></span>
                                <div class="progress-bar-wrap">
                                    <div style="width: <?php echo $groeneEnergie?>%" class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                </section>
                <br>
            </div>
        </div>
    </div>
</main>

<div style="margin-left: 100px" class="datapost">

    <!--    $nummer = rand(0, 99);

        $sql = "SELECT id, username, email, gender FROM mockupdata /* WHERE id='$nummer'*/ ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            // output data of each row
            while ($row = $result->fetch_assoc())
            {
                echo "<br> id: " . $row["id"] . " - Name: " . $row["username"] . " " . $row["email"] . "<br>";
            }
        }
        else
        {
            echo "Geen resultaten";
        }-->
</div>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>

</body>
</html>