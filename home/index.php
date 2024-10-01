<?php include_once "../src/head.php"; ?>
<title><?php echo ucwords(basename(__DIR__)); ?> | Centre Clinic Podològic</title>
<?php include_once "../src/navbar.php"; ?>
<div class="carousel slide" data-bs-ride="carousel" id="carouselInici">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="20000">
            <img alt="..." class="d-block w-100" src="../src/img/carrusel/1.jpeg">
        </div>
        <div class="carousel-item" data-bs-interval="20000">
            <img alt="..." class="d-block w-100" src="../src/img/carrusel/2.jpeg">
        </div>
        <div class="carousel-item" data-bs-interval="20000">
            <img alt="..." class="d-block w-100" src="../src/img/carrusel/3.jpeg">
        </div>
        <div class="carousel-item" data-bs-interval="20000">
            <img alt="..." class="d-block w-100" src="../src/img/carrusel/4.jpeg">
        </div>
        <div class="carousel-item" data-bs-interval="20000">
            <img alt="..." class="d-block w-100" src="../src/img/carrusel/5.jpeg">
        </div>
    </div>
    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselInici" type="button">
        <span aria-hidden="true" class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselInici" type="button">
        <span aria-hidden="true" class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="d-flex justify-content-center">
    <h1 class="text-center text-dark fs-2" id="titol">
        <p>Un centre <b>únic</b> a Sant Quirze al teu servei <br>
            Som un <b>equip</b> amb <b>il·lusió</b> i <b>professionalitat</b> que <b>gaudim</b> de la nostra feina <br>
            <br><b>+25 anys</b> d'experiència
        </p>
    </h1>
</div>
<div class="mt-5" id="mutues">
    <h2 class="mb-5">MÚTUES COL·LABORADORES:</h2>
    <div id="llista-mutues" class="d-flex flex-row flex-wrap justify-content-center px-4">
        <img alt="assistencia-sanitaria" src="../src/img/mutues/logo-assistencia.png">
        <img alt="axa" src="../src/img/mutues/logo-axa.png">
        <img alt="mgc" src="../src/img/mutues/logo-mgc.png">
        <img alt="cosalud" src="../src/img/mutues/logo-cosalud.png">
        <h4 class="text-center"><b>Conveni</b> amb el <b>Servei Català de la Salut</b> <br>per tractar el peu diabètic</h4>
        <img alt="catsalut" src="../src/img/mutues/logo-catsalut.png">
    </div>
</div>
<?php include_once "../src/footer.php"; ?>
