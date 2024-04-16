<?php

include_once("BDD.class.php");

Class Inscription extends BDD {
    public function inscription($nom,$prenom,$date_de_naissance,$genre,$ville,$email,$mot_de_passe,$loisir) {
        $mot_de_passe=md5($mot_de_passe);
        $sql2 = "SELECT DATEDIFF(DATE(NOW()),'$date_de_naissance')";
        $prepare2 = $this->BDD->prepare($sql2);
        $prepare2->execute();        
        $result=$prepare2->fetchAll();

        $sql3 = "SELECT * FROM user WHERE email='$email'";
        $prepare3 = $this->BDD->prepare($sql3);
        $prepare3->execute();
        $result2=$prepare3->fetchAll();
        if (empty($result2[0][0])){
            if ($result[0][0]<6570){
                header("location:../views/underage.html");


            }
            elseif ($result[0][0]>=6570){

            $sql = "INSERT INTO user(nom,prénom,date_de_naissance,genre,ville,email,mot_de_passe,loisir) VALUES ('$nom', '$prenom', '$date_de_naissance', '$genre', '$ville', '$email', '$mot_de_passe', '$loisir')";
            $prepare = $this->BDD->prepare($sql);
            $prepare->execute();
            header("location:../views/Inscription_successfull.html");
            }
        }
        else{
            echo "Cette adresse mail est déjà utilisée,<a href='../views/Inscription.html'>Cliquez pour être redirigé.</a>";
            header("location:../views/mail.html");
        } 
    }
}