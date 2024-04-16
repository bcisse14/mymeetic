const Loisirs = localStorage.getItem('Loisirs');
$.ajax({
    url:'../controllers/search.php',
    type : 'POST',
    data: {
        Loisirs:Loisirs
    },

    // success: function(response) {
    //     response = JSON.parse(response);
    //     $.each(response,function(key,value){
    //         $.each(value, function (k, v) {
    //             console.log(k, v)
    //             $(`.${k}`).html(v);
                
    //         })
    //         // $(key).html(value);
    //         // value.value
    //         // console.log(value);
    //         })
    // }

    success: function(response) {
        response = JSON.parse(response);
        $(".nom").html("Nom : " + response.nom);
        $(".prénom").html("Prénom : " + response.prénom)
        $(".email").html("Mail : " + response.email);
        $(".loisir").html("Loisirs : " + response.loisir);
        $(".genre").html("Genre : " + response.genre);
        $(".date_de_naissance").html("Date de naissance : " + response.date_de_naissance);
        $(".ville").html("Ville : " + response.ville);
    }
})
