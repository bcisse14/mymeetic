<?php
include_once("BDD.class.php");

Class Compte extends BDD {
    public function compte($mail)
    {
        
        $SQL = "SELECT * FROM user WHERE email = '$mail'";

        $prepare = $this->BDD->prepare($SQL);
        $prepare->execute();
        return $prepare->fetchAll();

    }
}

?>