<?php

   
   
class Conexao {
 
    public function conect (){
    $conexao = new PDO("mysql:host=localhost;dbname=projetoagenda", "root", "");
    return $conexao;
    }
    
}
