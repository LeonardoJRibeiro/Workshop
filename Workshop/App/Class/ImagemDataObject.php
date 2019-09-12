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
class ImagemDataObject{
    public static function listar($login){
        $query="select * from imagem";
        $conexao = Conexao::Conectar();
        $resultado = $conexao->query($query);
        if($resultado->num_rows > 0){
            if(!$login === true){
                Tela::inicioGaleria();
                while ($linha = $resultado->fetch_assoc()) {
                    Tela::mostraImagem($linha['caminho']);
                }
                Tela::fimGaleria();
            }
            else{
                Tela::inicioLinha();
                while ($linha = $resultado->fetch_assoc()) {
                    Tela::mostraImagemAdmin($linha['caminho'], $linha['idImagem']);
                }
                Tela::fimLinha();
            }
        }
    }
    public static function salvar($caminho){
        $query = "insert into imagem (caminho) values ('$caminho')";
        return Conexao::Conectar()->query($query);
    }
    public static function excluir($id){
        $query = "delete from imagem where idImagem = $id";
        return Conexao::Conectar()->query($query);
    }
}