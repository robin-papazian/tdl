
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

// ajout membre
$(document).on('click','.add-membre',function()
{
    
    $("#membre").toggleClass("is-active");
    
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
    
    let id_espace = this.id;
    //mettre une condition si supprime alors ajax
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

var  id_espace = '';

$(document).on('click','.add-membre',function()
{
    id_espace = this.id;
})
    

//Ajouter un membre
$(document).on('click','#create-group',function()
{
    let collaborateur = $('#collaborateur').val(); 
    $.ajax({
        url: 'Api/add-group.php',
        type: 'POST',
        data: { collaborateur : collaborateur, 
                id_espace : id_espace
            },      
    success: function(response) {
       if(response == 1)
       {
            $(".modal").removeClass("is-active");
       }
       else
       {
            $("#collaborateur").addClass("is-danger");
            $("#field-collaborateur").append("<p class='help is-danger'>Collaborateur introuvable</p>");
       }
    }
    })
});

                                    /********** Traitement Plan de Travaille ***********/

// voir plan de travaille
$(document).on('click','.voir-espace',function()
{
    id_espace = this.id;
    $("#espace-travaille").removeClass("is-large");
    $("#plan-travaille").removeClass("is-hidden");
    
});

//modal Ajout liste
$(document).ready(function() 
{
    
    $("#new-liste").click(function() 
    {  
        $("#modal-liste").toggleClass("is-active");
    
    });
});

//créer une liste
$(document).ready(function() 
{
    $("#create-liste").click(function() 
    { 
        let = nom_liste = $('#nom-liste').val();
        console.log(id_espace);
        $.ajax({
            url: 'Api/add-liste.php',
            type: 'POST',
            data: { 
                    id_espace : id_espace,
                    nom_liste : nom_liste, 
                },      
        success: function(response) {
            $("#nom-liste").val('');
            $("#modal-liste").removeClass("is-active");
        }
        })
    })    
})

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

