
// events sur burger header
$(document).ready(function() 
{
    $(".navbar-burger").click(function() 
    {
        // Ajout "is-active" class "navbar-burger" & "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
    
    });
});

// events sur dropdown nav espace de travaill
$(document).ready(function() 
{
    $("#drop1").click(function() 
    {
        $("#drop1").toggleClass("is-active");
    });
});