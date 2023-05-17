<?php
?>

<html>
<head>
    <title></title>

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/index.css"
</head>
<header>

</header>
<body>

<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/1-serie/Sport-line/1-serie-sport-line-curved-right.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="img/1-serie/Sport-line/1-serie-sport-line-front.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="img/1-serie/Sport-line/1-serie-sport-line-curved-left.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="img/1-serie/Sport-line/1-serie-sport-line-side-left.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="img/1-serie/Sport-line/1-serie-sport-line-curved-back-right.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="img/1-serie/Sport-line/1-serie-sport-line-back.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="img/1-serie/Sport-line/1-serie-sport-line-curved-back-left.png" class="d-block w-100">
        </div>
        <div class="carousel-item">
            <img src="img/1-serie/Sport-line/1-serie-sport-line-side-right.png" class="d-block w-100">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"></a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"></a>
</div>
<hr>

<div class="introText">
    <h1 class="center uppercase">Carrosseriekleuren</h1>
    <h3 class="center"> Selecteer uw kleur</h3>
</div>

<div class="container">
    <h3 class="h3Title">Unilak</h3>
    <div class="row">
        <div class="col-md-3">
            <img class="imgColor" src="img/colors/alpineweiss3.png">
        </div>
        <div class="col-md-3">
            <img class="imgColor" src="img/colors/schwarz2.png">
        </div>
    </div>
    <hr>

    <h3 class="h3Title">Metalliclak</h3>
    <div class="row">
        <div class="col-md-3">
            <img class="imgColor" src="img/colors/sahpirschwarz_metallic.png">
        </div>
        <div class="col-md-3">
            <img class="imgColor" src="img/colors/melbourne_rot_metallic.png">
        </div>
        <div class="col-md-3">
            <img class="imgColor" src="img/colors/glaciersilber_metallic.png">
        </div>
        <div class="col-md-3">
            <img class="imgColor" src="img/colors/mineralweiss_metallic.png">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <img class="imgColor" src="img/colors/mineralgrau_metallic.png">
        </div>
        <div class="col-md-3">
            <img class="imgColor" src="img/colors/phytonicblau.png">
        </div>
        <div class="col-md-3">
            <img class="imgColor" src="img/colors/seaside_blue.png">
        </div>
        <div class="col-md-3">
            <img class="imgColor" src="img/colors/sunset_orange.png">
        </div>
        <div class="col-md-3">
            <img class="imgColor" src="img/colors/storm_bay_metallic.png">
        </div>
    </div>
</div>

<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-md-12">
            <h1>Kleur naam hier</h1>
            <h3>Prijs van kleur</h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin: 35px 0 35px 0;">
            <a href="wheelsSelection.php">
                <button type="button" class="btn btn-primary btn-lg btn-block btnSize">Wielen kiezen</button>
            </a>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.carousel').carousel({
        interval: 500000000
    })

</script>

</body>
</html>