<!DOCTYPE html>
<html style="border: solid black">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trés-Low</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="Css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/9ddb75d515.js" crossorigin="anonymous"></script>
</head>
    
    <body style="border: solid blue">
        <header class='navbar' style="border: solid yellow">
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

        <section  class="section has-background-info is-flex is-justify-content-space-around is-align-items-center has-background-light" style="border: solid red">
            <aside class="menu box mt-0" style='width:30%;    '>
                <p class="menu-label">
                    Espace de Travaille
                    <button class="button is-small" style="height:20px;"><i class="fas fa-plus"></i></button>
                </p>
            </aside>
            

            <div class="card is-align-self-auto" style=' width: 50%'>
                <div class="card-content">
                    <p class="title">
                        “Robin votre espace de travaille est vide ! Créer en un .”</br>
                        "Choisiser un Espace !"</br>
                        "Choisiser un Projet !"
                    </p>
                </div>
            </div>
        </section>
        <section class='hero is-medium has-background-white-ter' style="border: solid green">
            <div class="hero-head" style="border: solid red  ">
                <aside style="border: solid black">
        
                    <button class="button is-small ml-4 " ><i class="fas fa-plus"></i></button>
                   
                </aside>
            </div>
            <div class='hero-body is-flex is-justify-content-center is-justify-content-space-around is-flex-wrap-wrap' style='border:solid black'>
                <article class="panel is-success">
                    <p class="panel-heading">
                        Nom du projet
                    </p>
                    <div class="field has-addons">
                        <label class="label "></label>
                        <div class="control ">
                            <input class="input " type="text" placeholder="Nouvelle tache">
                        </div>
                        <div class="control">
                            <a class="button is-info">
                                Créer
                            </a>
                        </div>
                    </div>
                    <a class="panel-block is-active" style="text-decoration: line-through;">
                        <span class="panel-icon">
                            <i class="fas fa-book" aria-hidden="true"></i>
                        </span>
                        bulma
                    </a>
                </article>
                <article class="panel is-success">
                    <p class="panel-heading">
                        Nom de la liste
                    </p>
                    <div class="field has-addons">
                        <label class="label "></label>
                        <div class="control ">
                            <input class="input " type="text" placeholder="Nouvelle tache">
                        </div>
                        <div class="control">
                            <a class="button is-info">
                                Créer
                            </a>
                        </div>
                    </div>
                    <div class="panel-block is-active is-flex is-justify-content-space-between">
                        <a class="is-flex is-align-items-center">
                            <span class="panel-icon">
                                <i class="fas fa-book" aria-hidden="true"></i>
                            </span>
                            bulma
                        </a>
                        <div >
                            <button class="button is-small is-success"><i class="fas fa-check"></i></button>
                            <button class="button is-small is-danger"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                </article>
                <article class="panel is-success">
                    <p class="panel-heading">
                        Nom de la liste
                    </p>
                    <div class="field has-addons">
                        <label class="label "></label>
                        <div class="control ">
                            <input class="input " type="text" placeholder="Nouvelle tache">
                        </div>
                        <div class="control">
                            <a class="button is-info">
                                Créer
                            </a>
                        </div>
                    </div>
                    <a class="panel-block is-active">
                        <span class="panel-icon">
                            <i class="fas fa-book" aria-hidden="true"></i>
                        </span>
                        bulma
                    </a>
                </article>
                <article class="panel is-success">
                    <p class="panel-heading">
                        Nom de la liste
                    </p>
                    <div class="field has-addons">
                        <label class="label "></label>
                        <div class="control ">
                            <input class="input " type="text" placeholder="Nouvelle tache">
                        </div>
                        <div class="control">
                            <a class="button is-info">
                                Créer
                            </a>
                        </div>
                    </div>
                    <a class="panel-block is-active">
                        <span class="panel-icon">
                            <i class="fas fa-book" aria-hidden="true"></i>
                        </span>
                        bulma
                    </a>
                </article>
            </div>
            <div class='hero-footer is-flex is-justify-content-center' style='border:solid orange'>
                <p class="title">
                    <i class="far fa-trash-alt fa-5x"></i>
                </p>
            </div>
        </section>
    </body>

</html>


<script src='Js/script.js'></script>