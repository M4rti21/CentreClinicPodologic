<?php include_once "../src/head.php"; ?>
    <title><?php echo ucwords(basename(__FILE__, '.php')); ?> | Centre Clinic Podològic</title>
<?php include_once "../src/navbar.php"; ?>
    <div class="d-flex flex-column justify-content-center align-items-center mt-4 px-4 pb-4" id="card-container">
        <h1 class="text-center">Atenció i tractament d'afeccions del peu en general</h1>
        <div>Disposem de diferents sales especialitzades per a tractar les diferents afeccions del peu com:
            <br>
            <br>
            <ul>
                <li>Onicocriptosi (ungles clavades o encarnades)</li>
                <li>Onicogrifosi (ungles gruixudes)</li>
                <li>Berrugues</li>
                <li>Fongs (peu d’atleta)</li>
                <li>Hiperqueratosis (durícies, ulls de poll)</li>
                <li>Confecció d’ortesis de silicona per a la correcció i/o proteccció dels dits</li>
            </ul>
            Serveis destinats a totes les edats.
        </div>
        <div id="gallery">
            <div class="row">
                <img src="../src/img/serveis/atencio/1.jpg" class="col-12 col-lg-5 mt-4 rounded" alt="...">
                <img src="../src/img/serveis/atencio/2.jpg" class="col-12 col-lg-7 mt-4 rounded" alt="...">
            </div>
        </div>
    </div>
<?php include_once "../src/footer.php"; ?>