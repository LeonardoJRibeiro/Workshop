<?php
require_once 'Conexao.php';
require_once 'Tela.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ImagemDataObject
 *
 * @author leona
 */
class PatrocinadorDataObject{
    public static function listar($login){
        $query="select * from patrocinador";
        $conexao = Conexao::Conectar();
        $resultado = $conexao->query($query);
        if($resultado->num_rows > 0){
            if(!$login === true){
                while ($linha = $resultado->fetch_assoc()) {
                    Tela::mostraImagemPatrocinador($linha['caminho']);
                }
            }
            else{
                while ($linha = $resultado->fetch_assoc()) {
                    Tela::mostraImagemPatrocinadorAdmin($linha['caminho'], $linha['idPatrocinador']);
                }
            }
        }
    }
    public static function listarPorId($id){
        $query="select * from patrocinador where idPatrocinador = $id";
        $conexao = Conexao::Conectar();
        $resultado = $conexao->query($query);
        if($resultado->num_rows > 0){
            while ($linha = $resultado->fetch_assoc()) {
                return($linha['caminho']);
            }
        }
    }
    public static function salvar($caminho){
        $query = "insert into patrocinador (caminho) values ('$caminho')";
        return Conexao::Conectar()->query($query);
    }
    public static function excluir($id){
        $query = "delete from patrocinador where idPatrocinador = $id";
        return Conexao::Conectar()->query($query);
    }
}