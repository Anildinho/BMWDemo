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
    <h1 class="center uppercase">Extra uitrusting</h1>
    <h3 class="center"> Kies je BMW Individual uitrusting</h3>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 borderGrey content">
            <img class="imgSizeExtraOptions" src="img/extra_options/1-serie/bmw_individual/bmw_individual_extline_aluminium.png">
            <h5 class="textModalVariant"> BMW Individual <br /> Exterieur Line <br /> Aluminium zijdeglans </h5>
            <h6 class="contentCollapse2"> € 0 </h6>
            <h6 class="contentCollapse3"><img src="img/pijlrechts.png" style="width: 20px;"> Meer details</h6>
            <div class="form-check">
                <input class="form-check-input position-static checkmarkModalVariant2" type="checkbox" id="blankCheckbox" value="option1">
            </div>
        </div>
        <div class="col-md-6 borderGrey content">
            <img class="imgSizeExtraOptions" src="img/extra_options/1-serie/bmw_individual/bmw_individual_hoogglans_shadowline.png">
            <h5 class="textModalVariant"> BMW Individual <br /> Hoogglans Shadow <br /> Line </h5>
            <h6 class="contentCollapse2"> € 0 </h6>
            <h6 class="contentCollapse3"><img src="img/pijlrechts.png" style="width: 20px;"> Meer details</h6>
            <div class="form-check">
                <input class="form-check-input position-static checkmarkModalVariant2" type="checkbox" id="blankCheckbox" value="option1">
            </div>
        </div>
        <div class="col-md-6 borderGrey content">
            <img class="imgSizeExtraOptions" src="img/extra_options/1-serie/bmw_individual/bmw_individual_hemel_in_anthrazit.png">
            <h5 class="textModalVariant"> BMW Individual <br /> hemelbekleding in <br /> Anthrazit uitgevoerd </h5>
            <h6 class="contentCollapse2"> € 267,41 </h6>
            <h6 class="contentCollapse3"><img src="img/pijlrechts.png" style="width: 20px;"> Meer details</h6>
            <div class="form-check">
                <input class="form-check-input position-static checkmarkModalVariant2" type="checkbox" id="blankCheckbox" value="option1">
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin: 35px 0 35px 0;">
            <a href="extra_elektricSelection.php">
                <button type="button" class="btn btn-primary btn-lg btn-block btnSize">Elektrische voorzieningen kiezen</button>
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