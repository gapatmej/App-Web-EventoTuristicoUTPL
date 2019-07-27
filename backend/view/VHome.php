
<?php include PUBLIC_DIR.'carouselGalery.php';?>

<link href="<?php echo ESTILOS ?>contactStyle.css" rel="stylesheet">

<section class="team" id="team">
    <div class="container-fluid">
        <h2 class="text-center">
            Conoce nuestras ultimas noticias
        </h2>
        <div class="row">
        <?php foreach ($rsNoticias as $noticia) {?>
            
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ">
                <div class="card card-block">
                    <a style="height: 100%"><img alt="" style="height: 80%" class="team-img" src="<?php echo NOTICIAS.$noticia["nombre_imagen"];?>">
                        <div class="card-title-wrap">
                            <span class="card-title"><?php echo $noticia["titulo_noticia"]; ?></span>
                        </div>
                        <div class="team-over">
                                <div style="font-size: 22px; height:80%; color:#28a9e6; overflow: scroll">
                                <?php echo $noticia["descripcion_noticia"];?>
                                </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php }?>
        </div>
    </div>
</section>

