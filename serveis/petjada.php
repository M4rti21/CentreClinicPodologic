<?php include_once "../src/head.php"; ?>
<title><?php echo ucwords(basename(__FILE__, '.php')); ?> | Centre Clinic Podològic</title>
<?php include_once "../src/navbar.php"; ?>
<div class="d-flex flex-column justify-content-center align-items-center mt-4 px-4 pb-4" id="card-container">
    <h1 class="text-center">Estudi de la petjada i la carrera</h1>
    <div>Estudi informatitzat amb plataforma de pressions d’última generació amb tecnologia pionera (FootStep 2.0)
        <br>
        <br>
        Per al Diagnòsitc de:
        <br>
        <br>
        <ul>
            <li>Peu cavus</li>
            <li>Peu pla</li>
            <li>Peu Valg (pronador)</li>
            <li>Peu Varus (supinador)</li>
            <li>Fascitis Plantar</li>
            <li>Alteracions estructurals de genoll, cadera, assimetries</li>
        </ul>
    </div>
    <div id="gallery">
        <div class="row">
            <img src="../src/img/serveis/petjada/1.jpg" class="col-12 col-lg-5 mt-4 rounded" alt="...">
            <img src="../src/img/serveis/petjada/2.jpg" class="col-12 col-lg-7 mt-4 rounded" alt="...">
        </div>
        <div class="row">
            <img src="../src/img/serveis/petjada/3.jpg" class="col-12 col-lg-7 mt-4 rounded" alt="...">
            <img src="../src/img/serveis/petjada/4.jpg" class="col-12 col-lg-5 mt-4 rounded" alt="...">
        </div>
        <div class="row">
            <img src="../src/img/serveis/petjada/5.jpg" class="col-12 col-lg-7 mt-4 rounded" alt="...">
            <video autoplay muted playsinline loop src="../src/img/serveis/petjada/6.mp4" type="video/mp4" class="col-12 col-lg-5 mt-4 rounded">El buscador no soporta video</video>
        </div>
    </div>
</div>
<?php include_once "../src/footer.php"; ?>
