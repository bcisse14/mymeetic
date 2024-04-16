$('#connectbtn').click(function(e) {
    e.preventDefault();

    let email = $('.email').val();
    let mdp = $('.mdp').val();
    
    $.ajax({
        url: '../controllers/connexion.php',
        type: 'POST',
        data: {
            email: email,
            mdp: mdp
        },

        success: function(response) {
            console.log(response);
            if (response.message){
                $('.message').html('test');
               return $('.message').html(response.message);
            }
            if (response.email) {
                localStorage.setItem('email', response.email);
                window.location.replace('../views/Compte.html');
            }
        }
    })
})
