
<div class="container" style="padding-top:130px"> 
    <?php foreach ($rsLista as $ponencia) { ?>
        <div class="panel-group">
            <div class="panel">
                <a class="list-group-item" data-toggle="collapse" href="#<?php echo $ponencia["id_ponencia"] ?>">
                    <strong><?php echo $ponencia["nombre_ponencia"] ?></strong>
                </a>
                <div class="panel-collapse collapse" id="<?php echo $ponencia["id_ponencia"] ?>">
                    <div class="panel-body">
                        <h4> Lugar </h4><a class="list-group-item"><?php echo $ponencia["lugar_ponencia"] ?></a>
                        <h4> Fecha </h4><a class="list-group-item"><?php echo $ponencia["fecha_ponencia"] ?></a>
                        <a class="list-group-item" data-toggle="collapse" href="#<?php echo $ponencia["id_ponencia"] . "exp" ?>">
                            Expositores 
                        </a>
                        <div class="panel-collapse collapse" id="<?php echo $ponencia["id_ponencia"] . "exp" ?>">
                            <div class="panel-body">
                                <?php foreach ($ponencia["expositores"] as $expositor) { ?>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <img alt="" style="height: 80%" class="team-img" src="<?php echo EXPOSITOR.$expositor["nombre_imagen"]; ?>">
                                    </div>
                                    <div class="col-lg-9" >
                                        <a  class="list-group-item"><?php echo $expositor["nombre_expositor"] ?></a>
                                        <a class="list-group-item"><?php echo $expositor["detalle_expositor"] ?></a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>




                    </div>
                </div>
            </div>  
        </div>

    <?php } ?>
</div>