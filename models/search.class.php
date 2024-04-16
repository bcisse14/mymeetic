<?php
include_once("BDD.class.php");
Class Search extends BDD{
    public function Search($loisir,$date_de_naissance='',$ville=''){
       $sql="SELECT * 
      FROM user 
      WHERE loisir
      LIKE '%$loisir%'
       ";
       $prepare=$this->BDD->prepare($sql);
       $prepare->execute();
       return $prepare->fetchAll();


    }
}
?>