<?php 
    $id = $_POST['id'];
    require 'Class/PatrocinadorDataObject.php';
    $patrocinador = new PatrocinadorDataObject();
    $caminho = $patrocinador::listarPorId($id);
    echo $caminho;
    if($patrocinador::excluir($id)){
        unlink("../public/$caminho");
    }
    header('Location: ../public/index.php');

