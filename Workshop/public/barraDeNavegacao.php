<nav class="navbar navbar-fixa-pc navbar-expand-md navbar-dark navbar-light" style="background-color: #2C2A2B;">
        <a class="navbar-brand" href="#" style="color: #978B7A">XIV Workshop UEG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="" style="color: #978B7A">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: #978B7A">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://doity.com.br/xiv-workshop-ueg-1" style="color: #978B7A">Participe</a>
                </li>
                <?php
                    if(isset($_SESSION['administrador'])){
                        include 'formSair.php';
                    }
                ?>
            </ul>
        </div>
    </nav>
