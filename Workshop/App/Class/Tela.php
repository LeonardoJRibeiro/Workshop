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
        echo "<div id=\"links\">
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
        echo"   <div class=\"col-lg-2 col-md-3 col-sm-4 col-6 d-flex p-1 animated zoomIn\" id=\"links\">
                        <div class=\"mx-auto shadow\">
                            <a class=\" my-auto\" href=\"$caminho\" data-gallery=\"\">
                                <img src=\"$caminho\" class=\"img-fluid img-auto img-thumbnail\">
                            </a>
                        </div>
                    </div>
                ";                
    }
    public static function mostraImagemAdmin($caminho, $id){
        echo"       <div class=\"col-lg-2 col-md-3 col-sm-4 col-6\" >
                        <div class=\"row d-flex\">
                            <div class=\"mx-auto animated zoom-in\">
                                <a class=\" my-auto\" href=\"$caminho\" data-gallery=\"\">
                                    <img src=\"$caminho\" class=\"img-fluid img-auto img-thumbnail\">
                                </a>
                                <br>
                            </div>
                        </div>
                        <div class=\"row d-flex\">
                            <div class=\"mx-auto\">
                                <button type=\"button\" class=\"btn btn-danger m-2\" data-toggle=\"modal\" data-target=\"#myModal$id\">Excluir</button> 
                            </div>
                        </div>
                    </div>
                    <div id=\"myModal$id\" class=\"modal\" style=\"max-heigth: 100%;\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\">Excluir </h4>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                </div>
                                <div class=\"modal-body\">
                                    <div class=\"d-flex\">
                                        <div class=\"mx-auto\">
                                            Tem certeza?
                                        </div>
                                    </div>
                                    <form method=\"post\" action=\"../App/excluirImagem.php\">
                                        <input type=\"hidden\" value=\"$caminho\" name=\"caminho\">
                                        <input type=\"hidden\" value=\"$id\" name=\"id\">
                                        <div class=\"row mt-5\">
                                            <div class=\"col\">
                                                <input type=\"submit\" class=\"btn btn-danger form-control\" value=\"Sim\">
                                            </div>
                                            <div class=\"col\">
                                                <button type=\"button\" class=\"btn btn-light form-control\" data-dismiss=\"modal\">Não</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                ";                
    }
}
