<?php include_once "../src/head.php";?>
<title><?php echo ucwords(basename(__FILE__, '.php'));?> | Centre Clinic Podològic</title>
<?php include_once "../src/navbar.php";?>
<div class="d-flex flex-column justify-content-center align-items-center mt-4 px-4 pb-4" id="card-container">
    <h1 class="text-center">Podologia Pediàtrica</h1>
    <div>
        La importància d’un diagnòstic precoç és la clau per evitar complicacions o lesions en l’adult.
        <br>
        S’aconsella fer un estudi de la petjada a partir dels 4 anys (hi hagi o no simptomes dolorosos
        o visuals) per descartar patologies com:
        <br>
        <br>
        <ul>
            <li>Peu pla infantil</li>
            <li>Peu valg</li>
            <li>Genus Valgus</li>
            <li>Rotacio de maluc (caminar amb les puntes endins)</li>
        </ul>
    </div>
    <div id="gallery">
        <div class="row">
            <img src="../src/img/serveis/pediatrica/1.jpg" class="col-12 col-lg-5 mt-4 rounded" alt="...">
            <img src="../src/img/serveis/pediatrica/3.jpg" class="col-12 col-lg-7 mt-4 rounded" alt="...">
        </div>
        <div class="row">
            <img src="../src/img/serveis/pediatrica/4.jpg" class="col-12 col-lg-7 mt-4 rounded" alt="...">
            <video autoplay muted playsinline loop src="../src/img/serveis/pediatrica/5.mp4" type="video/mp4" class="col-12 col-lg-5 mt-4 rounded">El buscador no soporta video</video>
        </div>
    </div>
</div>
<?php include_once "../src/footer.php";?>