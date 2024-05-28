<?php
require_once 'model/projeto.php';

class ProjetoController
{
    public function all(){
         $obj = new projeto();
        $projetos = $obj->all();
        require_once 'view/projeto_all.php';
    }
    public function create(){
        $obj = new projeto();
        if( isset ($_POST['nome'] ) ){
            
        }
    }
}