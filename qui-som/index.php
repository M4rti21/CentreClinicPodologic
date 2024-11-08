<?php include_once "../src/head.php"; ?>
<title><?php echo ucwords(basename(__DIR__)); ?> | Centre Clinic Podològic</title>
<?php include_once "../src/navbar.php"; ?>
<?php 
$podologues = array(
  (object) [
    'codi' => 'gloria',
    'nom' => 'Glòria Canal Sellarés',
    'atributs' => array(
        "Diplomada en Podologia",
        "Universitat de Barcelona",
        "Núm COP: 838080780"
    )
  ],
  (object) [
    'codi' => 'miriam',
    'nom' => 'Míriam Álvarez Camino',
    'atributs' => array(
        "Diplomada en Podologia",
        "Fundació Universitària del Bages (FUB)",
        "Núm COP: 8380801078"
    )
   ],
  (object) [
    'codi' => 'mariajose',
    'nom' => 'MªJosé Aldea Rodón',
    'atributs' => array(
        "Diplomada en Podologia",
        "Universitat de Barcelona",
        "Núm COP: 838080913"
    )
   ],
  (object) [
    'codi' => 'silvia',
    'nom' => 'Silvia Royo Pertusa',
    'atributs' => array(
        "Graduada en Podologia",
        "Universitat de Barcelona",
        "Núm COP: 8380802229"
    )
   ],
  (object) [
    'codi' => 'davinia',
    'nom' => 'Davinia',
    'atributs' => array(
        "Responsable d'Administració i Recepció",
    )
   ],
);

foreach ($podologues as $p) {
?>
<div class="card person m-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img
            src="../src/img/podologues/<?php echo $p->codi ?>.jpg"
                class="img-fluid rounded-start ratio-1x1 podoFoto"
                alt="..." />
        </div>
        <div class="col-md-8">
            <div class="card-body">
            <h1 class="card-title"><?php echo $p->nom ?></h1>
                <hr />
                <?php $i = 4 ?>
                <?php foreach ($p->atributs as $a) { ?>
                <h<?php echo $i ?>><?php echo $a ?></h4>
                <?php $i++ ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>
</div>
<?php include_once "../src/footer.php"; ?>
