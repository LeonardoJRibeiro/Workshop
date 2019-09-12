<?php 
    $id = $_POST['id'];
    $caminho = $_POST['caminho'];
    require 'Class/ImagemDataObject.php';
    $imagem = new ImagemDataObject;
    $imagem::excluir($id);
    unlink("../public/$caminho");
    header('Location: ../public/galeria.php');

