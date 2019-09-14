<div class="container">
    <script>var admin = false;</script>
    <div class="row">
        <div class="col-12">
            <div class="d-flex">
                <div class="mx-auto">
                    <h1>Patrocinadores:</h1>
                </div>
            </div>
        </div>
    </div>
    <div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel d-block">
        <div class="slides">
            <div id="links">
                <?php 
                    require_once '../App/Class/PatrocinadorDataObject.php';
                    PatrocinadorDataObject::listar(isset($_SESSION['administrador']));
                    echo "teste".$_POST['id'];
                ?>
            </div>
        </div>
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>
    <?php if(isset($_SESSION['administrador'])){
        include './apagarpatrocinador.php';
        include '../App/enviarfotosPatrocinadores.php';}?>
</div>
<script src="BlueimpGaleria/js/blueimp-gallery.js"></script>
<script>
    blueimp.Gallery(document.getElementById('links').getElementsByTagName('a'), {
        container: '#blueimp-gallery-carousel',
        carousel: true,
        enableKeyboardNavigation: true,
        slideshowInterval: 3000,
        titleElement: 'h3',
        startSlideshow: !admin
    });
</script>