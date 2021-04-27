
                                  // events on index
                                  

// modal connexion / inscription
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

//close Modals
$(document).ready(function() 
{
    $(".delete").click(function() 
    {
        $(".modal").removeClass("is-active");
    });
});

                                    /*********************************/

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