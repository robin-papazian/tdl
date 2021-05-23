
                                   /** Modal **/
                                  

// Connexion 
$(document).ready(function() 
{
    $("#button-connexion").click(function() 
    {
        $("#connexion").toggleClass("is-active");
    });
});

// Inscription
$(document).ready(function() 
{
    $("#button-inscription").click(function() 
    {
        $("#inscription").toggleClass("is-active");
    });
});

// Profil
$(document).ready(function() 
{
    $("#profil").click(function() 
    {
        $("#profil-user").toggleClass("is-active");
    });
});

// Membre
$(document).on('click','.add-membre',function()
{
    
    $("#membre").toggleClass("is-active");
    
});

// Tache
$(document).on('click','.tache_name',function()
{
    let id_tache = $(this).parent().attr('id');
    let id_modal = '#'+id_tache.replace('tache-','modal-');
    $(id_modal).toggleClass("is-active");
    
})

//Ajout liste
$(document).ready(function() 
{
    $("#new-liste").click(function() 
    {  
        $("#modal-liste").toggleClass("is-active");
    });
});

// Header
$(document).ready(function() 
{
    $(".navbar-burger").click(function() 
    {
        // Ajout "is-active" class "navbar-burger" & "navbar-menu"
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
    
    });
});

// Close
$(document).on('click','.delete',function()
{
    $(".modal").removeClass("is-active");

})

                                    /********* Inscription *********/

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
                    document.location.href = 'todolist.php';
                }
            },
            
        })

    })
})


                                    /********* Connexion *********/

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
                    document.location.href = 'todolist.php';
                }
            },
            
        })

    })
})

                                    /********** Profil ***********/

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

                                    /********** Espace de Travaille ***********/


//build DOM espace 

function buildDom()
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
}

$(document).ready(function(){
    buildDom();
})

//Ajout 
$(document).ready(function() 
{
    $("#add-espace").click(function() 
    {
        let espace = $('#nom-espace').val();
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

$(document).on('click','.dropdown-item',function()
{
    $('.dropdown').removeClass('is-active');
})



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

//Construction 
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

//Suppression
$(document).on('click','.dropdown-item',function()
{
    let id_espace = this.id;
    let nodigit = id_espace.replace(/[0-9]/g, '');
    
    if(nodigit == 'supprime-')
    {
        $.ajax({
            url: 'Api/delete-espace.php',
            type: 'POST',
            data: {id_espace : id_espace },
            dataType: 'json',
        
        success: function(response) {
            $('#all-listes').empty();
            $('#user-interaction').empty();
            $('#user-interaction').html('choisiser votre espace !');
            $('#espace-container').empty();
            if(response != '1'){
                buildEspaces(response);
            }
            
        }
        })
    }
 
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
            buildDom();
       }
       else
       {
            $("#collaborateur").addClass("is-danger");
            $("#field-collaborateur").append("<p class='help is-danger'>Collaborateur introuvable</p>");
       }
    }
    })
});

                                    /********** Plan de Travaille Listes ***********/

// Listes 
$(document).on('click','.voir-espace',function()
{
    id_espace = this.id;
    $("#espace-travaille").removeClass("is-large");
    $("#plan-travaille").removeClass("is-hidden");
    $('#all-listes').empty();
    $.ajax({
        url: 'Api/show-liste.php',
        type: 'POST',
        data: { id_espace : id_espace,},
        dataType: 'json',
        success: function(response) {
            if(response != 0)
            {
                $('#user-interaction').empty();
                $('#user-interaction').html('allez y mollo !');
                buildList(response);
            }
            else
            {
                $('#user-interaction').empty();
                $('#user-interaction').html('vous pouvez commencer une liste des à présent !');
            }  
        }
    })   
});

//Construction 
function buildList(array)
{  
    $.ajax({
        url: 'Html/block-liste.php',
        type: 'POST',
        data: {array : array },
        dataType: 'html',
        
    success: function(response) {
        $(response).appendTo($('#all-listes'));    
    }
    })
}

//Création
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
            dataType: 'json',      
        success: function(response) {
            $("#nom-liste").val('');
            $("#modal-liste").removeClass("is-active");
            $('#all-listes').empty();
            buildList(response);
           
        }
        })
    })    
})

// Drag & Drop 
var suprimer = '';

$(document).on('mousedown','.drag-drop',function()
{
    $('html, body').animate({
        scrollTop: $("#bin").offset().top
    }, 1500);
    suprimer = '#'+$(this).parent().attr('id');

})

$(document).on('dragend',suprimer,function()
{
    $.ajax({
        url: 'Api/delete-liste.php',
        type: 'POST',
        data: {
            id : suprimer,
        },
        dataType: 'json',
        success: function(response) {
            $('#all-listes').empty();
            buildList(response);       
        }
    }) 
})


                                    /********** Tache des listes ***********/

//Insertion 
$(document).on('click','.tache',function()
{
    let id_liste = $(this).parent().parent().attr('id');
    let inputval= "#"+id_liste+' .input';
    let nom_tache = $(inputval).val();

    $.ajax({
        url: 'Api/add-tache.php',
        type: 'POST',
        data: {
            id    : id_liste,
            input : nom_tache,
        },
        dataType : 'json', 
        
    success: function(response) {
        $('#all-listes').empty();
        buildList(response);  
    }
   }) 
})

//Modification
$(document).on('click','.edit-tache',function()
{
    let id_tache = $(this).parent().parent().parent().attr('id');
    
    let nomDesc = $('#'+id_tache).find('input[name="nom"]').val();
    let valueDesc = $('#'+id_tache).find('textarea[name="description"]').val();

    $.ajax({
        url: 'Api/update-tache.php',
        type: 'POST',
        data: {
            id      : id_tache,
            newName : nomDesc,
            newVal  : valueDesc,
        },
        dataType: 'json',
        success: function(response) {
            $('#all-listes').empty();
            buildList(response);  
            
        }
       }) 
})

// Supression
$(document).on('click','.delete-tache',function()
{
    let id_tache = $(this).parent().parent().attr('id');
    
    $.ajax({
        url: 'Api/delete-tache.php',
        type: 'POST',
        data: {
            id      : id_tache,
        },
        dataType: 'json',
        success: function(response) {
            $('#all-listes').empty();
            buildList(response);  
        }
    }) 
})

// Validation
$(document).on('click','.valide-tache',function()
{
    let id_tache = $(this).parent().parent().attr('id');

    $.ajax({
        url: 'Api/valide-tache.php',
        type: 'POST',
        data: {
            id : id_tache,
        },
        dataType: 'json',
       
        success: function(response) {
            $('#all-listes').empty();
            buildList(response);  
        }
    }) 
})


