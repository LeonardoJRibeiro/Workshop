<?php require_once '../App/bootstrap.php';?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-sacale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="BlueimpGaleria/css/blueimp-gallery.min.css">
        <link rel="stylesheet" type="text/css" href="BlueimpGaleria/css/blueimp-gallery-indicator.css">
        <link rel="stylesheet" href="node_modules/animate.css/animate.css">
        <style type="text/css">
            .img-auto{
                height: 156px;
                width: 156px;
            }
        </style>
        <script type="text/javascript" src="js/jquery.min.js"></script>
    </head>
    <body style="background-color: #343233">
        <nav class="navbar navbar-fixa-pc navbar-expand-md navbar-dark bg-dark" style="baclkground-color: #2C2A2B;">
            <a class="navbar-brand" href="#" style="color: #978B7A">XIV Workshop UEG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://doity.com.br/xiv-workshop-ueg-1">Participe</a>
                    </li>
                    <?php
                        if(isset($_SESSION['administrador'])){
                            include 'formSair.php';
                        }
                    ?>
                </ul>
            </div>
        </nav>
        <div class="container-fluid">
            <?php
                if(isset($_SESSION['administrador'])){
                    include_once '../App/enviarfotos.php';
                }
                require_once '../App/Class/ImagemDataObject.php';
                $imagens = new ImagemDataObject;
                $imagens->listar(isset($_SESSION['administrador']));
            ?>
        </div>
        <div id="blueimp-gallery" class="blueimp-gallery">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev" style="color: #FFFFFF">‹</a>
            <a class="next" style="color: #FFFFFF">›</a>
            <a class="close" style="color: #FFFFFF">×</a>
            <a class="play-pause"></a>
            <ol class="indicator"></ol>
        </div>
        <?php include_once './rodape.php';?>
    </body>
    <script type="text/javascript" src="BlueimpGaleria/js/blueimp-gallery.min.js"></script>
    <script type="text/javascript" src="BlueimpGaleria/js/vendor/jquery.js"></script>
    <script type="text/javascript" src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        document.getElementById('links').onclick = function (event) {
        event = event || window.event;
        var target = event.target || event.srcElement,
            link = target.src ? target.parentNode : target,
            options = {index: link, event: event},
            links = this.getElementsByTagName('a');
        blueimp.Gallery(links, options);
        };
    </script> 
</html>