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

        <section  class=" is-flex is-justify-content-space-around is-align-items-center">
            <aside class="menu box mt-0" style='width:30%;    '>
                <p class="menu-label">
                    Espace de Travaille
                    <button class="button is-small" style="height:20px;"><i class="fas fa-plus"></i></button>
                </p>
                <div class=" block" style=' display:flex; flex-direction:column; height:100%; '>
                    <div class="dropdown " style='margin: 1%; ' id="drop1">
                       <div class="dropdown-trigger">
                           <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                               <span>Kouzzina</span>
                                <span class="icon is-small"><i class="fas fa-angle-down" aria-hidden="true"></i></span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <a href="#" class="dropdown-item">
                                    Voir
                                </a>
                                <a class="dropdown-item">
                                    Ajouter un Membre
                                </a>
                                <a href="#" class="dropdown-item">
                                    Supprimer
                                </a>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class=" block " style=' display:flex; flex-direction:column; height:100%'>
                    <div class="dropdown " style='margin: 1%; ' id="drop1">
                       <div class="dropdown-trigger">
                           <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                               <span>Kouzzina</span>
                                <span class="icon is-small"><i class="fas fa-angle-down" aria-hidden="true"></i></span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu" role="menu">
                            <div class="dropdown-content">
                                <a href="#" class="dropdown-item">
                                    Mes listes
                                </a>
                                <a class="dropdown-item">
                                    Ajouter un Membre
                                </a>
                                <a href="#" class="dropdown-item">
                                    Valider
                                </a>
                                <a href="#" class="dropdown-item">
                                    Supprimer
                                </a>
                            </div>
                        </div> 
                    </div>
                </div> 
 
            </aside>

            <div class="card is-align-self-auto" style=' width: 50%'>
                <div class="card-content">
                    <p class="title">
                        “Robin votre espace de travaille est vide ! Créer en un .”</br>
                        "Choisiser un Espace !"
                    </p>
                </div>
            </div>
        </section>
    </body>

</html>


<script src='../Js/script.js'></script>