
                <?php foreach($_POST['array'] as $value): ?>
                
                <div class=" block is-flex is-flex-direction-column" style='height:100%; ' >
                    <div class="dropdown is-active" style='margin: 1%; ' >
                       <div class="dropdown-trigger" id='<?= $value['id']?>'>
                           <button class="button espace_button" aria-haspopup="true" aria-controls="dropdown-menu">
                               <span class='nom_espace'><?= $value["nom"] ?></span>
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
                                <hr class="dropdown-divider">
                                <div class='dropdown-item'>
                                    <span>Creation</span></br>
                                    <strong><?= $value['date_creation']?></strong>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <?php endforeach;?>
               
                <!-- 2: Projet ajouter dans le aside via input -->