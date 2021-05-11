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
        <?php include('Html/header.php')?>
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
                    <button class="button is-medium is-fullwidth block is-primary is-rounded" id="button-connexion">Connexion</button>
                    <button class="button is-medium is-fullwidth is-link is-rounded" id="button-inscription">Inscription</button>
                </div>  
            </div>
        </section>

        <section>
            <div class="modal" id='connexion'>
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Connexion</p>
                        <button class="delete" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                        <div class="field" id="field-connexion-login">
                            <label class="label">Login</label>
                            <div class="control has-icons-left">
                                <input id='user-login' class="input" type="text" placeholder="Ex : Michou_de_Marseille">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
    
                        </div>
                        <div class="field" id="field-connexion-pass">
                            <label class="label">Mot de passe</label>
                            <div class="control has-icons-left">
                                <input id='user-pass' class="input " type="password">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                        </div>
                    </section>
                    <footer class="modal-card-foot">
                        <button id='connect-user' class="button is-success">Connexion</button>
                    </footer>
                </div>
            </div>

            <div class="modal" id="inscription">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Inscription</p>
                        <button class="delete" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                        <div class="field">
                            <label class="label">Nom</label>
                            <div class="control">
                                <input id='nom' class="input" type="text" placeholder="Ex : Michou">
                            </div>
                        </div>
                        <div class="field" id="field-inscription-login">
                            <label class="label">Login</label>
                            <div class="control has-icons-left">
                                <input id='login' class="input" type="text" placeholder="Ex : Michou_de_Marseille">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            
                        </div>
                        <div class="field" id="field-inscription-email">
                            <label class="label">Email</label>
                            <div class="control has-icons-left has-icons-right">
                                <input id='email' class="input" type="email" placeholder="Ex : michou@laplateforme.io">
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
                                <input id='password' class="input " type="password">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                        </div>
                        <div id="data">
                        </div>
                    </section>
                    <footer class="modal-card-foot">
                        <button id='insert-user' class="button is-success">Inscription</button>
                    </footer>
                </div>
            </div>
        </section>
    </body>

</html>


<script src='Js/script.js'></script>