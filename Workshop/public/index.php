<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-sacale=1 maximum-scale=1, user-scalable=no">
        <meta charset="utf-8">
        <link rel="icon" href="img/ai.png">
        <link rel="stylesheet" type="text/css" href="css/index.css">
        <link rel="stylesheet" type="text/css" href="node_modules/animate.css/animate.css">
        <link rel="stylesheet" type="text/css" href="bootstrap-4.1.3/css/bootstrap.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>XIV Workshop UEG</title>
        <style type="text/css">
            @media(min-width: 720px){
                .navbar-fixa-pc{ 
                    position:fixed;top:0;right:0;left:0;z-index:1030;
                }
            }
        </style>
    </head>
    <body style="background-color: #343233">
        <nav class="navbar navbar-fixa-pc navbar-expand-md navbar-dark bg-dark " style="background-color: #2C2A2B;">
            <a class="navbar-brand" href="#" style="color: #978B7A">XIV Workshop UEG</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeria.php">Galeria</a>
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
        <div class="container">
            <header>
                <div class="row">
                    <div class="col-md-5">
                        <div class="d-flex">
                            <img class="ai-img img-fluid mx-auto" src="img/ai.png">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <h5 class="edickao ">XIV</h5>
                        <h4 class="evenkto ">Workshop UEG</h4>
                        <h1 class="telma">Inteligência Artificial</h1><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex">
                        <div class="mx-auto">
                            <a href="https://doity.com.br/xiv-workshop-ueg-1" class="btn btn-outline-info btn-lg animated infinite pulse ">Participe</a>
                        </div>
                    </div>
                </div>
            </header>
            <div class="row p-4 ">
                <div class="col-sm-4 p-3">
                    <div class="data">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex">
                                    <div class="mx-auto">
                                        <img src="img/data.png" class="img-data">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex">
                                    <font class="mx-auto">5 e 6 de novembro</font>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-3">
                    <div class="local">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex">
                                    <div class="mx-auto">
                                        <img src="img/local.png" class="img-local">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex">
                                    <font class="mx-auto">UEG Unidade Itaberai</font>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-4 p-3">
                    <div class="valor">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex">
                                    <div class="mx-auto">
                                        <img src="img/valor.png" class="img-valor">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex">
                                    <font class="mx-auto">R$ 20,00</font>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="sobre">
                <h1 class="titulo-sobre">Sobre o evento</h1><br>
                <a class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lacinia nisl ac rutrum rutrum. Morbi convallis velit ac elit molestie, vel mollis nulla gravida. Pellentesque ut nisi tristique erat rhoncus condimentum. Morbi elementum auctor ex a condimentum. Maecenas sed leo condimentum, bibendum velit a, euismod augue. Pellentesque in elementum nibh, sit amet condimentum risus. Phasellus quis pulvinar odio. Sed eleifend elit vel placerat maximus. Praesent venenatis ultricies lacus ac aliquet. In vehicula tortor ligula, in volutpat quam consequat at. Donec ut massa odio. Sed maximus elit neque, vitae aliquet mi condimentum eget. Suspendisse dignissim risus id luctus malesuada. Integer volutpat, felis sit amet euismod sagittis, justo nibh faucibus sapien, ac vehicula leo lacus vitae est. Etiam sollicitudin turpis at magna ornare dapibus.</a>
            </div>
            <div class="palestrantes">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-3" data-anime="left" style="max-width: 540px;">
                            <div class="card" style="background-color: #2C2A2B;">
                                <img src="img/bill.jpg" class="img-fluid card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Bill Gates</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3" data-anime="top" style="max-width: 540px;">
                            <div class="card" style="background-color: #2C2A2B;">
                                <img src="img/steve.jpg" class="img-fluid card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Steve Jobs</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-3" data-anime="right" style="max-width: 540px;">   
                            <div class="card" style="background-color: #2C2A2B;">
                                <img src="img/jeff.jpg" class="img-fluid card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Jeff Bezos</h5>
                                    <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="porque">
                <div class="row">
                    <div class="col-md-7">
                        <h1>Porque Inteligência Artificial?</h1><br>
                        <a class="texto-sobre texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam lacinia nisl ac rutrum rutrum. Morbi convallis velit ac elit molestie, vel mollis nulla gravida. Pellentesque ut nisi tristique erat rhoncus condimentum. Morbi elementum auctor ex a condimentum. Maecenas sed leo condimentum, bibendum velit a, euismod augue. Pellentesque in elementum nibh, sit amet condimentum risus. Phasellus quis pulvinar odio. Sed eleifend elit vel placerat maximus. Praesent venenatis ultricies lacus ac aliquet. In vehicula tortor ligula, in volutpat quam consequat at. Donec ut massa odio. Sed maximus elit neque, vitae aliquet mi condimentum eget. Suspendisse dignissim risus id luctus malesuada. Integer volutpat, felis sit amet euismod sagittis, justo nibh faucibus sapien, ac vehicula leo lacus vitae est. Etiam sollicitudin turpis at magna ornare dapibus.</a>
                    </div>
                    <div class="col-md-5 d-flex">
                        <div class="mx-auto my-auto p-4">
                            <img class="ai-img img-fluid" src="img/robot.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="final">
                <h2>Está esperando oque?</h2>
                <h1 class="findal-titulo">Venha participar!</h1><br><br>
                <a href="https://doity.com.br/xiv-workshop-ueg-1" class="btn btn-outline-info btn-lg animated infinite pulse ">Participe</a>
            </div>
        </div>  
       <?php include_once './rodape.php';?>

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="bootstrap-4.1.3/js/bootstrap.min.js"></script>
        <script>
            const debounce = function (func, wait, immediate) {
                let timeout;
                return function (...args) {
                    const context = this;
                    const later = function () {
                        timeout = null;
                        if (!immediate) func.apply(context, args);
                    };
                    const callNow = immediate && !timeout;
                    clearTimeout(timeout);
                    timeout = setTimeout(later, wait);
                    if (callNow) func.apply(context, args);
                };
            };
            const target = document.querySelectorAll('[data-anime]');
            const animationClass = 'animate';
            function animeScroll() {
                const windowTop = window.pageYOffset + (window.innerHeight * 0.75);
                target.forEach((element) => {
                    console.log('i')
                    if (windowTop > element.offsetTop) {
                        element.classList.add(animationClass);
                    } else {
                        element.classList.remove(animationClass);
                    }
                })
            }
            const handleScroll = debounce(animeScroll, 200);
            if (target.length) {
                window.addEventListener('scroll', handleScroll);
            }
        </script>
    </body>
</html>