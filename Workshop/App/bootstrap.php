<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(isset($_POST['sair'])){
        session_destroy();
        header("Location: index.php");
    }

