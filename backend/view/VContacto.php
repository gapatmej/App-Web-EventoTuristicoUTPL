<link href="<?php echo ESTILOS ?>contacto.css" rel="stylesheet">

<div class="container" style="padding-top:120px">

<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contáctanos <small>Escribe tus datos y mensaje, y nosotros te contactamos </small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form action="<?php echo APP_URL ?>contacto/enviar" method="post" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nombre </label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control" name="txtNombre" placeholder="Escribe tu nombre" required="required" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">
                                Teléfono </label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-earphone"></span></span>
                                <input type="text" class="form-control" name="txtTelefono"  placeholder="Escribe tu numero de contacto" required="required" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Correo </label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="email" class="form-control" name="txtEmail"  placeholder="Escribe tu direccion de correo electronico" required="required" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Asunto </label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-share-alt"></span></span>
                                <input type="text" class="form-control" name="txtAsunto"  placeholder="Escribe tu asunto" required="required" />
                            </div>                       
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Cuentanos tu mensaje </label>
                            <textarea name="txtMensaje"  class="form-control" rows="11" cols="40" required="required"
                                placeholder="Mensaje"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Enviar Mensaje</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<?php include PUBLIC_DIR . 'modalMensaje.php'; ?>