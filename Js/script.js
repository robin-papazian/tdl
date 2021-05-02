
                                   /** modal **/
                                  

// connexion 
$(document).ready(function() 
{
    $("#button-connexion").click(function() 
    {
        $("#connexion").toggleClass("is-active");
    });
});

// inscription
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
        $("#profil-user").toggleClass("is-active");
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

                                    /********** Traitement profil ***********/

$(document).ready(function() 
{
    $("#insert-profil-user").click(function() 
    {
        
        let updateUser = {
            'nom' : $("#profil-nom").val(),
            'login' : $("#profil-login").val(),
            'email' : $("#profil-email").val(),
            'password' : $("#profil-password").val(),
        }
        
        $.ajax({
            url: 'Api/profil.php',
            type: 'POST',
            data: {
               updateUser,
                
            },
            success: function(response) {
                if (response == "email'") {
                    $("#profil-email").addClass("is-danger");
                    $("#field-profil-email").append("<p class='help is-danger'>Email déja utilisée</p>");
                
                }else if(response == "login'"){
                    $("#profil-login").addClass("is-danger");
                    $("#field-profil-login").append("<p class='help is-danger'>Login déja utilisée</p>");

                }
            },
            
        })

    })
})

                                    /********** Traitement Espace de Travaille ***********/


//build DOM espace dynamique

$(document).ready(function()
{     
    $.ajax({
        url: 'Api/get-espace.php',
        dataType: 'json',

    success: function(response) {
        if(response == 1)
        {
            $('#user-interaction').html('votre espace de travaille est vide. Créer en un !');
        }
        else
        {
            $('#user-interaction').html('choisiser votre espace !');
            buildEspaces(response);
        }
    }       
    })
})

// Ajout un Espace
$(document).ready(function() 
{
    $("#add-espace").click(function() 
    {
        
        let espace = $('#nom-espace').val();
        console.log(espace);

        $.ajax({
            url: 'Api/create-espace.php',
            type: 'POST',
            data: {espace: espace},
            dataType: 'json',
        
        success: function(response) {

            $('#nom-espace').val('');
            $('#user-interaction').empty();
            buildEspaces(response);
            $('#user-interaction').html('choisiser votre espace !');
           
        },
        })    
    })
})

//dropdown espace 

function togleMyId(ids)
{   
    let id = '#' + ids
    $(id).click(function() 
    {
        $(id).toggleClass('is-active');
        
    });   
}

$(document).on('click','.dropdown-trigger',function(){
    
    $.ajax({
        url: 'Api/ids-espace.php',
        dataType: 'json',
    
    success: function(response) { 
     
        response.forEach(index => {
        togleMyId(index['id']);
        }) 
       }
    });
})

// show / hide input espace de travaille
$(document).ready(function() 
{
    $("#input-projet").hide();
    
    $("#show-input").click(function() 
    {  
        $("#input-projet").toggle();
    
    });
});



//Construction d'un espace
function buildEspaces(array)
{  
    $.ajax({
        url: 'Html/block-projet.php',
        type: 'POST',
        data: {array : array },
        
    success: function(response) {
        $('#espace-container').empty();
        $(response).appendTo($('#espace-container'));    
    }
    })
}

//Suprimer un espace
$(document).on('click','.dropdown-item',function()
{
    //let a = $(' a > .dropdown-item').val();
    let id_espace = this.id;

    $.ajax({
        url: 'Api/delete-espace.php',
        type: 'POST',
        data: {id_espace : id_espace },
        dataType: 'json',
        
    success: function(response) {
        buildEspaces(response);
    }
    })
 
});



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

