<?php 
    session_start();

    if (isset($_GET['d'])){
        session_destroy();
        header('Location: index.php');
    }
    elseif(empty($_SESSION['login']))
    {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html >

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
        <?php include('Html/header.php');?>
        
        <section>
            <div class="modal" id="profil-user">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Changer votre Profil</p>
                        <button class="delete" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                        <div class="field">
                            <label class="label">Nom</label>
                            <div class="control">
                                <input id='profil-nom' class="input" type="text" value='<?=$_SESSION['nom']?>'>
                            </div>
                        </div>
                        <div class="field" id="field-profil-login">
                            <label class="label">Login</label>
                            <div class="control has-icons-left">
                                <input id='profil-login' class="input" type="text" value='<?=$_SESSION['login']?>'>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            
                        </div>
                        <div class="field" id="field-profil-email">
                            <label class="label">Email</label>
                            <div class="control has-icons-left has-icons-right">
                                <input id='profil-email' class="input" type="email" value='<?=$_SESSION['email']?>'>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                                <span class="icon is-small is-right">
                                    <i class="fas fa-check"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Mot de passe</label>
                            <div class="control has-icons-left">
                                <input id='profil-password' class="input " type="password">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                        </div>
                    </section>
                    <footer class="modal-card-foot">
                        <button id='insert-profil-user' class="button is-success">Modif</button>
                    </footer>
                </div>
            </div>
        </section>

        <section  class="section is-large has-background-info is-flex is-justify-content-space-around is-align-items-center has-background-light"  id='espace-travaille'>
            <aside class="menu box mt-0" style='width:30%;'>
                <p class="menu-label">
                    Espace de Travail
                    <button id='show-input' class="button is-small" style="height:20px;"><i class="fas fa-plus"></i></button>
                </p>
                <div id='input-projet' class="field has-addons">
                    <label class="label "></label>
                    <div class="control ">
                        <input id='nom-espace' class="input" value="" type="text" placeholder="Nom du projet">
                    </div>
                    <div class="control">
                        <a id='add-espace' class="button is-info">
                            Créer
                        </a>
                    </div>
                </div>
                <article id='espace-container'>
                </article>
            </aside>
            

            <div class="card is-align-self-auto" style=' width: 50%'>
                <div class="card-content">
                    <p class="title" >
                        <?=$_SESSION['login']?> <span id='user-interaction'></span>
                    </p>
                </div>
            </div>
        </section>
        <section class='hero is-medium has-background-white-ter is-hidden' id='plan-travaille'>
            <div class="hero-head">
                <aside >
        
                    <button class="button is-small ml-4 " id='new-liste' style='margin-top:2%;'><i class="fas fa-plus"></i></button>
                   
                </aside>
            </div>
            <div id='all-listes' class='hero-body is-flex is-justify-content-center is-justify-content-space-around is-flex-wrap-wrap'>
                                    <!-- Listes des Espaces ICI -->
            </div>
            <div class='hero-footer is-flex is-justify-content-center' id='bin' draggable='true'>
                <p class="title" style='margin-bottom: 5%;'>
                    <i  class="far fa-trash-alt fa-5x"></i>
                </p>
            </div>
        </section>
        <section>
            <div class="modal" id='membre'>
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Ajouter un Membre</p>
                        <button class="delete" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                        <div class="field" id="field-collaborateur">
                            <label class="label">Email</label>
                            <div class="control has-icons-left">
                                <input class="input" type="email" placeholder="Ex : amis@laplateforme.io" id='collaborateur'>
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                        </div>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button is-success" id='create-group'>Ajouter</button>
                    </footer>
                </div>
            </div>
            <div class="modal " id="modal-liste">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Nouvelle Liste</p>
                        <button class="delete" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                        <div class="field">
                            <label class="label">Nom de la liste</label>
                            <div class="control has-icons-left">
                                <input class="input " type="text" placeholder="Non de la liste" id='nom-liste'>
                            </div>
                        </div>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button is-success" id='create-liste'>Créer</button>
                    </footer>
                </div>
            </div>
        </section>
    </body>

</html>


<script src='Js/script.js'></script>