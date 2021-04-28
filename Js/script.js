
                                   /** modal **/
                                  

// connexion / inscription
$(document).ready(function() 
{
    $("#button-connexion").click(function() 
    {
        $("#connexion").toggleClass("is-active");
    });
});

$(document).ready(function() 
{
    $("#button-inscription").click(function() 
    {
        $("#inscription").toggleClass("is-active");
    });
});

// profil
$(document).ready(function() 
{
    $("#profil").click(function() 
    {
        $("#inscription").toggleClass("is-active");
    });
});


//close Modals
$(document).ready(function() 
{
    $(".delete").click(function() 
    {
        $(".modal").removeClass("is-active");
    });
});

                                    /*********Traitement inscription *********/

$(document).ready(function() 
{
    $("#insert-user").click(function() 
    {
        let nom = $("#nom").val();
        let login = $("#login").val();
        let email = $("#email").val();
        let password = $("#password").val();

       
        
        $.ajax({
            url: 'Api/inscription.php',
            type: 'POST',
            data: {
                nom: nom,
                login: login,
                email: email,
                password: password,
                
            },
            success: function(response) {
                if (response == "email'") {
                    $("#email").addClass("is-danger");
                    $("#field-inscription-email").append("<p class='help is-danger'>Email déja utilisée</p>");
                
                }else if(response == "login'"){
                    $("#login").addClass("is-danger");
                    $("#field-inscription-login").append("<p class='help is-danger'>Login déja utilisée</p>");

                }
                 else if(response == true) {
                    document.location.href = 'test.php';
                }
            },
            
        })

    })
})


                                    /*********Traitement connexion *********/

$(document).ready(function() 
{
    $("#connect-user").click(function() 
    {
        let login = $("#user-login").val();
        let password = $("#user-pass").val();
        
        $.ajax({
            url: 'Api/connexion.php',
            type: 'POST',
            data: {
                login: login,
                password: password,
                
            },
            success: function(response) {
                if (response == 1) {
                    
                    $("#user-login").addClass("is-danger");
                    $("#field-connexion-login").append("<p class='help is-danger'>Login Introuvable</p>");
                }else if(response == 3){
                    $("#user-pass").addClass("is-danger");
                    $("#field-connexion-pass").append("<p class='help is-danger'>Mot de passe incorrect</p>");

                }else if(response == 2) {
                    document.location.href = 'test.php';
                }
            },
            
        })

    })
})

                                    /***************************/



// burger header
$(document).ready(function() 
{
    $(".navbar-burger").click(function() 
    {
        // Ajout "is-active" class "navbar-burger" & "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
    
    });
});

// dropdown nav espace de travaill
$(document).ready(function() 
{
    $("#drop1").click(function() 
    {
        $("#drop1").toggleClass("is-active");
    });
});