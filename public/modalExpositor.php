<div class="modal fade" id="myModal<?php echo $expositor["id_expositor"] ?>" tabindex="-1" role="dialog" aria-labelledby="sLawsonLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="sLawsonLabel" align="center"><?php echo $expositor["nombre_expositor"] ?></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12 modal-image" align="center">
                        <img src="<?php echo EXPOSITOR . $expositor["nombre_imagen"]; ?>" alt="..." class="img-circle team-img">
                    </div>
                    <div class="col-sm-12">
                        <p><strong><?php echo $expositor["nombre_expositor"] ?></strong>
                        <?php echo $expositor["detalle_expositor"] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>