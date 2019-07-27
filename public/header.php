<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Portal para gestionar los eventos turisticos en la UTPL">
	<meta name="author"      content="Andres Peralta">
	
	<title>UTPL UNIVERSIDAD TECNICA PARTICULAR DE LOJA</title>
	
        <link rel="stylesheet" href="<?php echo ESTILOS ?>bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo ESTILOS ?>font-awesome.min.css">
	<!-- Custom styles for our template -->
        <link rel="stylesheet" href="<?php echo ESTILOS ?>bootstrap-theme.css" media="screen">
        <link rel="stylesheet" href="<?php echo ESTILOS ?>main.css">
        
        <script src="<?php echo JAVASCRIPT?>jquery.min.js"></script>
        <script src="<?php echo JAVASCRIPT?>bootstrap.min.js"></script>
        
</head>

<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container-fluid" style="padding-left: 80px">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.php"><img src="<?php echo IMAGES ?>utplLogo.png" style="height: 120%; width: 150%" alt="Universidad Tecnica Particular de Loja"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="<?php echo APP_URL?>">Home</a></li>
                <li><a href="<?php echo APP_URL?>ponencias/show">Ponencias</a></li>
                <li><a href="<?php echo APP_URL?>expositores/show">Expositores</a></li>
                <li><a href="<?php echo APP_URL?>agenda/show">Agenda</a></li>
                <li><a href="<?php echo APP_URL?>contacto/show">Contacto</a></li>
                <li><a class="btn" href="<?php echo APP_URL ?>login/show">Iniciar sesión / Registrarse</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div> 
<!-- /.navbar -->