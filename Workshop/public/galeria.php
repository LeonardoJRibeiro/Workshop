<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-sacale=1">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="BlueimpGaleria/css/blueimp-gallery.min.css">
        <link rel="stylesheet" type="text/css" href="BlueimpGaleria/css/blueimp-gallery-indicator.css">
        <link rel="stylesheet" href="node_modules/animate.css/animate.css">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="BlueimpGaleria/js/blueimp-gallery.min.js"></script>
        <script type="text/javascript" src="BlueimpGaleria/js/blueimp-helper.js"></script>
        <script type="text/javascript" src="BlueimpGaleria/js/vendor/jquery.js"></script>
        <script type="text/javascript" src="BlueimpGaleria/js/blueimp-gallery-fullscreen.js"></script>
        <style type="text/css">
            .img-auto{
                height: 156px;
                width: 156px;
            }
        </style>
    </head>
    <body style="background-color: #343233">
        <?php 
            session_start();
            include 'barraDeNavegacao.php'; 
        ?>
        <div class="container-fluid">
                    <?php
                        if(isset($_POST['sair'])){
                            session_destroy();
                            header("Location: galeria");
                        }
                        if(isset($_SESSION['administrador'])){
                            include_once '../App/enviarfotos.php';
                        }
                        require_once '../App/Class/ImagemDataObject.php';
                        $imagens = new ImagemDataObject;
                        $imagens->listar(isset($_SESSION['administrador']));
                    ?>
        </div>
    </body>
    <div id="blueimp-gallery" class="blueimp-gallery">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev" style="color: #FFFFFF">‹</a>
        <a class="next" style="color: #FFFFFF">›</a>
        <a class="close" style="color: #FFFFFF">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>
    <script type="text/javascript">
        //document.getElementById('botao').onclick = function (event) {event = event || window.event;};
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