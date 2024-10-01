<?php include_once "../src/head.php"; ?>
<title><?php echo ucwords(basename(__FILE__, '.php')); ?> | Centre Clinic Podològic</title>
<?php include_once "../src/navbar.php"; ?>
<ul class="list-group col-12 col-lg-6 mt-4 mx-auto">
    <li class="list-group-item ps-3 d-flex flex-row justify-content-between align-items-center">
        <span><i class="bi bi-geo-alt me-3"></i>C/Manso 14 B, 08192 <br>
            <i class="bi bi-geo-alt opacity-0 me-3"></i>Sant Quirze del Vallès</span>
        <a href="https://www.google.com/maps/place/Centre+Cl%C3%ADnic+Podol%C3%B2gic/@41.531924,2.0849823,19z/data=!3m1!4b1!4m5!3m4!1s0x12a49468057e7d7f:0xb0e03b51d42cc577!8m2!3d41.531925!4d2.0855266"
            target="_blank">Com anar-hi</a>
    </li>
    <li class="list-group-item ps-3 d-flex flex-row justify-content-between">
        <span><i class="bi bi-telephone me-3"></i>93 721 20 30</span>
        <a href="tel:93 721 20 30">Truca'ns</a>
    </li>
    <li class="list-group-item ps-3 d-flex flex-row justify-content-between">
        <span><i class="bi bi-whatsapp me-3"></i>654 83 52 83 (només missatges)</span>
        <a href="https://wa.me/34654835283">Escriu-nos</a>
    </li>
    <li class="list-group-item ps-3 d-flex flex-row justify-content-between">
        <span><i class="bi bi-envelope me-3"></i>info@centreclinicpodologic.com</span>
        <a href="mailto:info@centreclinicpodologic.com">Escriu-nos</a>
    </li>
    <li class="list-group-item ps-3">
        <i class="bi bi-clock me-3"></i><span>Horari:</span>
        <div class="horari">
            <ul>
                <li>
                    Matins de 9:00 - 13:30<br />
                    (Dilluns, Dimecres i Divendres)
                </li>
                <li>
                    Tardes de 15:30 - 20:30<br />
                    (Dilluns, Dimecres i Dijous)
                </li>
            </ul>
        </div>
    </li>
</ul>
<div id="mapouter" class="col-12 col-lg-6 mt-4 mx-auto d-flex justify-content-center">
    <iframe
        frameborder="0"
        height="100%"
        width="100%"
        id="gmap_canvas"
        src="https://maps.google.com/maps?q=Carrer%20Manso,%2014,%20B,%2008192%20Sant%20Quirze%20del%20Vall%C3%A8s,%20Barcelona&t=k&z=15&ie=UTF8&iwloc=&output=embed"></iframe>
</div>
<?php include_once "../src/footer.php"; ?>
