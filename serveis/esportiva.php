<?php include_once "../src/head.php"; ?>
<title><?php echo ucwords(basename(__FILE__, '.php')); ?> | Centre Clinic Podològic</title>
<?php include_once "../src/navbar.php"; ?>
<div class="d-flex flex-column justify-content-center align-items-center mt-4 px-4 pb-4" id="card-container">
    <h1 class="text-center">Podologia Esportiva</h1>
    <div>Diposem de cinta de córrer per valorar el moviment durant l’esport i la carrera i així obtenir
        la màxima informació del comportament de les extremitats inferiors i arribar a un diagnòstic correcte
        per confeccionar el tractament més adequat per tractar o prevenir futures lesions.
    </div>
    <div id="gallery">
        <div class="row">
            <img src="../src/img/serveis/esportiva/1.jpg" class="col-12 col-lg-5 mt-4 rounded" alt="...">
            <img src="../src/img/serveis/esportiva/2.jpg" class="col-12 col-lg-7 mt-4 rounded" alt="...">
        </div>
        <div class="row">
            <img src="../src/img/serveis/esportiva/3.jpg" class="col-12 col-lg-7 mt-4 rounded" alt="...">
            <video autoplay muted playsinline loop src="../src/img/serveis/esportiva/4.mp4" type="video/mp4" class="col-12 col-lg-5 mt-4 rounded">El buscador no soporta video</video>
        </div>
    </div>
</div>
<?php include_once "../src/footer.php"; ?>
