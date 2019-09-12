<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tela
 *
 * @author leona
 */
class Tela {
    public static function inicioGaleria(){
        echo "  <div id=\"links\">
                    <div class=\"row\">
                        ";
    }

    public static function fimGaleria(){
        echo "  </div>
             </div>";
    }
    public static function inicioLinha(){
        echo "  <div class=\"row\">
                        ";
    }

    public static function fimLinha(){
        echo "  </div>";
    }
    public static function mostraImagem($caminho){
        echo"       <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 d-flex p-1 animated zoomIn\" id=\"links\">
                        <div class=\"mx-auto\">
                            <a class=\" my-auto\" href=\"$caminho\" data-gallery=\"\">
                                <img src=\"$caminho\" class=\"img-fluid img-auto img-thumbnail\">
                            </a>
                        </div>
                    </div>
                    ";                
    }
    public static function mostraImagemAdmin($caminho, $id){
        echo"       <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 p-1 animated zoomIn\" >
                        <div class=\"row d-flex\">
                            <div class=\"mx-auto\">
                                <a class=\" my-auto\" href=\"$caminho\" data-gallery=\"\">
                                    <img src=\"$caminho\" class=\"img-fluid img-auto img-thumbnail\">
                                </a>
                                <br>
                            </div>
                        </div>
                        <div class=\"row d-flex\">
                            <div class=\"mx-auto\">
                                <form method=\"post\" action=\"../App/excluirImagem.php\">
                                    <input type=\"hidden\" value=\"$caminho\" name=\"caminho\">
                                    <input type=\"hidden\" value=\"$id\" name=\"id\">
                                    <input type=\"submit\" value=\"Excluir\">
                                </form>
                            </div>
                        </div>
                    </div>";                
    }
}
