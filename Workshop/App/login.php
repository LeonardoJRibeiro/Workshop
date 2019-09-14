<?php

if(isset($_POST['usuario']) && isset($_POST['senha'])){
    if($_POST['usuario'] === "admin" && $_POST['senha'] === "123"){
        session_start();
        $_SESSION ['administrador'] = true;
        header('Location: ../public/galeria.php');
    }
}
