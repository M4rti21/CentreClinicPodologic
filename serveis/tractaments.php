<?php include_once "../src/head.php";?>
    <title><?php echo ucwords(basename(__FILE__, '.php'));?> | Centre Clinic Podològic</title>
<?php include_once "../src/navbar.php";?>
    <div class="d-flex flex-column justify-content-center align-items-center mt-4 px-4 pb-4" id="card-container">
        <h1 class="text-center">Tractaments personalitzats (taller propi)</h1>
        <div>Un cop realitzat l’estudi de la petjada obtenim el diagnòstic i es confecciona el tractament per a la correcció de la patologia o per evitar futures lesions.
            <br>
            <br>
            Els tractaments Ortopodològics (Plantilles) els realitzem al nostre propi taller (sense intermediaris externs)
            <br>
            <br>
            <ul>
                <li>Utilitzem materials de primeres marques</li>
                <li>Màxima adaptació al peu per millorar el confort</li>
                <li>Revisions i modificacions necessàries</li>
                <li>Ortesis i silicones (per correccions digitals)</li>
            </ul>
        </div>
        <div id="gallery">
            <div class="row">
                <img src="../src/img/serveis/tractaments/1.jpg" class="col-12 col-lg-5 mt-4 rounded" alt="...">
                <img src="../src/img/serveis/tractaments/2.jpg" class="col-12 col-lg-7 mt-4 rounded" alt="...">
            </div>
            <div class="row">
                <img src="../src/img/serveis/tractaments/3.jpg" class="col-12 col-lg-7 mt-4 rounded" alt="...">
                <img src="../src/img/serveis/tractaments/4.jpg" class="col-12 col-lg-5 mt-4 rounded" alt="...">
            </div>
            <div class="row">
                <img src="../src/img/serveis/tractaments/5.jpg" class="col-12 col-lg-5 mt-4 rounded" alt="...">
                <img src="../src/img/serveis/tractaments/6.jpg" class="col-12 col-lg-7 mt-4 rounded" alt="...">
            </div>
        </div>
    </div>
<?php include_once "../src/footer.php";?>