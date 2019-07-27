<link href="<?php echo ESTILOS ?>hovereffect.css" rel="stylesheet">


<div class="container" style="padding-top: 120px">
    <div class="row">  
        <?php foreach ($rsExpositores as $expositor) { ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="hovereffect">
                    <img class="img-responsive" width="100%" height="10px" src="<?php echo EXPOSITOR . $expositor["nombre_imagen"]; ?>" alt="">
                    <div class="overlay">
                        <h2><?php echo $expositor["nombre_expositor"] ?></h2>
                        <a class="info" href="#aboutModal" data-toggle="modal" data-target="#myModal<?php echo $expositor["id_expositor"] ?>">Ver mas</a>
                    </div>
                </div>
                <div style="height:450px; width: 100%"><h2 ><?php echo $expositor["nombre_expositor"] ?></h2></div>
            </div> 
            <?php include PUBLIC_DIR."modalExpositor.php"; ?>
        <?php } ?>
    </div>
</div>
