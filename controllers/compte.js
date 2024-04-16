const email = localStorage.getItem('email');

if (email==null){

    window.location.replace("../views/Connexion.html");
}

$.ajax({
    url: '../controllers/compte.php',
    type: 'POST',
    data: {
        email: email
    },

    success: function(response) {
        response = JSON.parse(response);
        $(".name").html("Nom : " + response.nom);
        $(".prenom").html("Prénom : " + response.prénom)
        $(".mail").html("Mail : " + response.email);
        $(".Loisirs").html("Loisirs : " + response.loisir);
        $(".Genre").html("Genre : " + response.genre);
        $(".ddn").html("Date de naissance : " + response.date_de_naissance);
        $(".Ville").html("Ville : " + response.ville);
        $(".mdp").html("Mot de passe : ********** ");
    }
})