
                                   /** events modal **/
                                  

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

                                    /*********Traitement connexion/inscription *********/

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
                name: nom,
                log: login,
                ema: email,
                pass: password,
                
            },
            success: function(response) {
                // if (response) {
                //     document.location.href = 'Api/inscription.php';
                // }
                // else {
                //     alert('Mot de passe incorrect');
                // }
            },
            error: function(hxr, error, type) {
                $('body').append(type);
            },
            
        })
        console.log(data);
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