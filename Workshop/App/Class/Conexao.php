<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexao
 *
 * @author leona
 */
class Conexao{
    public static function Conectar(){
        $servername  = "localhost";
        $username = "root";
        $password = "";
        $banco = "Workshop";
        $conexao = new mysqli($servername, $username, $password, $banco);
        if($conexao->connect_error){
            echo "Erro na conexão";
        }
        return $conexao;
    }
}

