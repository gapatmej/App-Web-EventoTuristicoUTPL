<link rel="stylesheet" href="<?php echo ESTILOS ?>charisma-app.css">

<div class="ch-container" style="padding-top: 100px">
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-edit"></i> GESTIONA INSCRIPCION </h2>
                </div>
                <div class="box-content">
                    <form id="frmAdmin" role="form" method="post" class="login-form">
                        <button id="btnGuardar" type="submit" onclick="return guardarInscripcion()"  class="btn btn-success"> Guardar </button>
                        <a type="button" href="<?php echo APP_URL . "login/close" ?>" class="btn btn-info"> Cerrar Sesión </a><br><br>
                        <div class="row">
                            <div class="form-group cols col-sm-6">
                                <label for="lblNoIncripcion"> N° Incripción </label>
                                <input type="text" name="txtInscripcion" disabled class="form-control" value="<?php echo(isset($inscripcion["id_inscripcion"]))?$inscripcion["id_inscripcion"]:""; ?>"  id="txtInscripcion" >
                            </div>
                            <div class="form-group cols col-sm-6">
                                <label for="lblCedula"> Cedula </label>
                                <input type="text" disabled class="form-control" value="<?php echo $_SESSION["cedula_usuario"] ?>" id="txtCedula" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group cols col-sm-6">
                                <label for="lblNombre"> Nombre </label>
                                <input type="text" disabled  class="form-control" value="<?php echo $_SESSION["nombre_usuario"] . " " . $_SESSION["apellido_usuario"] ?>" id="txtNombre" >
                            </div>
                            <div class="form-group cols col-sm-6">
                                <label for="lblNacionalidad"> Nacionalidad </label>
                                <input type="text" disabled  class="form-control" value="<?php echo $_SESSION["nacionalidad_usuario"] ?>" id="txtNacionalidad" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group cols col-sm-6">
                                <label for="lblDireccion"> Dirección </label>
                                <input type="text" disabled  class="form-control" value="<?php echo $_SESSION["direccion_usuario"] ?>" id="txtDireccion" >
                            </div>
                            <div class="form-group cols col-sm-6">
                                <label for="lblCorreo"> Correo </label>
                                <input type="text" disabled  class="form-control" value="<?php echo $_SESSION["correo_usuario"] ?>" id="txtCorreo" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group cols col-xs-12">
                                <label for="lblCurso"> Curso </label>
                                <select class="form-control" name="dropCurso" onchange="cargarDescripcionCurso();" data-style="btn-info" id="dropCurso">
                                    <option descripcion="" selected="selected" nombreImagen="" value="0"> Selecciona el curso</option>
                                    <?php foreach ($rsCursos as $curso) { ?>
                                        <option nombreImagen="<?php echo $curso["imagen_curso"]; ?>" descripcion="<?php echo $curso["descripcion_curso"]; ?>" value="<?php echo $curso["id_curso"]; ?>"><?php echo $curso["nombre_curso"]; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group cols col-sm-6">
                                <label for="lblDetalle"> Presentación del Curso </label>
                                <textarea disabled class="form-control" rows="5" id="txtDescripcionCurso"></textarea>
                            </div>
                            <div class="col-md-6" >
                                <img id="imgCurso" style="width:280px; height:280px; display:block; margin-left:auto; margin-right:auto" src="" class="img-thumbnail" >
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="form-group cols col-xs-12">
                                <label for="lblTaller"> Taller </label>
                                <select name="dropTaller" class="form-control" onchange="cargarDescripcionTaller();" data-style="btn-info" id="dropTaller">
                                    <option  selected="selected" descripcion="" costo="" nombreImagen="" value="0"> Seleccion el taller </option>
                                    <?php foreach ($rsTalleres as $taller) { ?>
                                        <option costo="<?php echo $taller["costo_taller"] ?>" nombreImagen="<?php echo $taller["imagen_taller"]; ?>" descripcion="<?php echo $taller["descripcion_taller"]; ?>" value="<?php echo $taller["id_taller"]; ?>"><?php echo $taller["nombre_taller"]; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group cols col-md-6">
                                <label for="lblDetalle"> Presentación del Taller </label>
                                <textarea disabled class="form-control" rows="5" id="txtDescripcionTaller"></textarea>
                                $ <input disabled name="txtCostoTaller" id= "txtCostoTaller" type="text" class="form-control" value="" >
                                <button type="submit" onclick="return agregarTaller()" class="btn btn-success"> Agregar Taller </button>
                            </div>
                            <div class="col-md-6" >
                                <img id="imgTaller" style="width:280px; height:280px; display:block; margin-left:auto; margin-right:auto" src="" class="img-thumbnail" >
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->


</div><!--/.fluid-container-->


<div class="container-fluid" >
    <div id="content" class="col-lg-12 col-sm-12">

        <div class="row">
            <div class="box col-lg-12">
                <div class="box-inner">
                    <div class="box-header well" data-original-title="">
                        <h2><i class="glyphicon glyphicon-user"></i> Detalle Inscripción </h2>
                    </div>
                    <div class="box-content">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                                <tr>
                                    <th style="width: 60%"> Detalle </th>
                                    <th class="text-center" style="width: 10%"> Cantidad </th>
                                    <th class="text-center" style="width: 10%"> Precio Unitario </th>
                                    <th class="text-center" style="width: 10%"> Precio Total </th>
                                    <th style="width: 10%">  </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rsDetalle as $detalle) { ?>
                                    <tr class="table-danger">
                                        <td><?php echo $detalle["descripcion"]; ?></td>
                                        <td class="text-center" style="align:center"><?php echo $detalle["cantidad"]; ?></td>
                                        <td class="text-center"><?php echo $detalle["precioUnitario"]; ?></td>
                                        <td class="text-center"><?php echo $detalle["precioTotal"]; ?></td>
                                        <td class="text-center">
                                            <?php if ($detalle["isDelete"]) { ?>
                                            
                                                <a class="btn btn-danger" href="<?php echo APP_URL ?>AdminUsuario/eliminarDetalle?id=<?php echo $detalle["id"]?>">
                                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                                    Eliminar
                                                </a>
                                            <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                                    <tr style="background-color: #dff0d8" >
                                        <td></td>
                                        <td></td>
                                        <td class="text-center" >TOTAL </td>
                                        <td class="text-center"><?php echo $total; ?></td>
                                        <td class="text-center">
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/span-->
        </div><!--/row-->
        <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->



<hr>
</div><!--/.fluid-container-->
</div>


<script src='<?php echo JAVASCRIPT ?>shorcutAdminUser.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.cookie.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.dataTables.min.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/chosen.jquery.min.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.colorbox-min.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.raty.min.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.iphone.toggle.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.autogrow-textarea.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.uploadify-3.1.min.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.history.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/init-chart.js'></script>

<script>
    $(document).ready(function() {
        pathImages = "<?php echo IMAGES; ?>"
        pathAplication = "<?php echo APP_URL ?>";
        
        <?php if(isset($inscripcion["id_inscripcion"])){?>
            $("#dropCurso").val("<?php echo $inscripcion["id_curso"]; ?>")
            $("#btnGuardar").text("Actualizar");
            cargarDescripcionCurso();
        <?php } ?>
    });

</script>