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
                        <div class="field">
                            <label class="label">Login</label>
                            <div class="control has-icons-left">
                                <input class="input is-danger" type="text" placeholder="Ex : Michou_de_Marseille">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <p class="help is-danger">Login incorrecte</p>
                        </div>
                        <div class="field">
                            <label class="label">Mot de passe</label>
                            <div class="control has-icons-left">
                                <input class="input is-danger " type="password">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                            <p class="help is-danger">Mot de passe incorrecte</p>
                        </div>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button is-success">Connexion</button>
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
                                <input class="input" type="text" placeholder="Ex : Michou">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Login</label>
                            <div class="control has-icons-left">
                                <input class="input is-danger" type="text" placeholder="Ex : Michou_de_Marseille">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                            </div>
                            <p class="help is-danger">Login déja utilisée</p>
                        </div>
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control has-icons-left has-icons-right">
                                <input class="input is-danger" type="email" placeholder="Ex : michou@laplateforme.io">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-user"></i>
                                </span>
                                <span class="icon is-small is-right">
                                    <i class="fas fa-check"></i>
                                </span>
                            </div>
                            <p class="help is-danger">Email déja utilisée</p>
                        </div>
                        <div class="field">
                            <label class="label">Mot de passe</label>
                            <div class="control has-icons-left">
                                <input class="input " type="password">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </div>
                        </div>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button is-success">Inscription</button>
                    </footer>
                </div>
            </div>
        </section>
    </body>

</html>


<script src='Js/script.js'></script>