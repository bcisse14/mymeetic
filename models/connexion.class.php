<?php
include_once("BDD.class.php");
Class Connexion extends BDD {
    public function connexion($mail, $mot_de_passe){
        $mot_de_passe = MD5($mot_de_passe);

        $sql = "SELECT * FROM user WHERE email='$mail'";
        $prepare = $this->BDD->prepare($sql);
        $prepare->execute();
        $result =$prepare->fetchAll();
       if (empty($result)){
        return $result;
       }
       $sql2="SELECT * FROM user WHERE email='$mail' AND mot_de_passe='$mot_de_passe'";
       $prepare = $this->BDD->prepare($sql2);
       $prepare->execute();
       $result2 =$prepare->fetchAll();
       return $result2;
     }

}
?>