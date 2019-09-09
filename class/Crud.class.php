<?php

class Crud extends Conexao{
    private $sql;
    private $exec;
    
  public function lerDados($campos,$tabela,$cond = NULL){
    if($cond == NULL){
      $this->sql = "SELECT $campos FROM $tabela";
    }else{
      $this->sql = "SELECT $campos FROM $tabela $cond";
    }
    
    $this->exec = parent::conect()->query($this->sql);
    return $this->exec;
  } // fim lerDados
    
    public function alterarDados($tabela,$dados,$cond){
    $this->sql = "UPDATE $tabela SET $dados $cond";
    $this->exec = parent::conect()->query($this->sql);
    if($this->exec){
      return true;
    }else{
      return false;
    }
  } // fim alterarDados
    
  public function insereDados($tabela,$dados,$valores){
    $this->sql = "INSERT INTO $tabela($dados) VALUES($valores)";
    $this->exec = parent::conect()->query($this->sql);
    if($this->exec){
      return true;
    }else{
      return false;
    }
  }
  public function deletarDados($tabela,$cond){
    $this->sql = "DELETE FROM $tabela $cond";
    $this->exec = parent::conect()->query($this->sql);
    if($this->exec){
      return true;
    }else{
      return false;
    }
  }
  
  
  
  
  
}
