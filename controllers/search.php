    <?php
        include('../models/search.class.php');
        $loisirs=$_POST['Loisirs'];

        
        $search = new Search;
        $recherche = $search->Search($loisirs);
        $recherche=$recherche[0];

        header('Content-Type : application/json');
        echo json_encode($recherche);
    ?>