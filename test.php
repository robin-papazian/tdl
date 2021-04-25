<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trés-Low</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="Css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/9ddb75d515.js" crossorigin="anonymous"></script>
</head>
    
    <body>
        <header class='navbar'>
            <nav class="container" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item">
                        <i class="fas fa-home">Home</i>   
                    </a>
                    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div id="navbarBasicExample" class="navbar-menu">
                    <div class="navbar-end">
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                Robin
                            </a>
                            <div class="navbar-dropdown" id="menu-drop">
                                <div class="navbar-item buttons">
                                    <a class="button is-primary">
                                      <strong>Profil</strong>
                                    </a>
                                </div>
                                <hr class="navbar-divider">
                                <div class="navbar-item buttons">
                                    <a class="button is-primary">
                                        <strong>Deconnexion</strong>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <section class="hero is-large is-info" >
            <div class="hero-body is-flex" >
                <div class="container has-text-centered ">
                    <p class="title is-size-1">
                        Trés -> Low
                    </p>
                    <p class="subtitle mt-2" >
                        Almost as good as Trello
                    </p>
                </div>
                <div class="container ">
                    <button class="button is-medium is-fullwidth block is-primary is-rounded" id='r'>Connexion</button>
                    <button class="button is-medium is-fullwidth is-link is-rounded">Inscription</button>
                </div>
               
            </div>
        </section>
    </body>

</html>

<script>
$(document).ready(function() 
{
    $("#r").click(function() 
    {
        $(".modal").toggleClass("is-active");
    });
});

</script>

<script src='Js/script.js'></script>