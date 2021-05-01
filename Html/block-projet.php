
                <?php foreach($_POST['array'] as $value): ?>
                
                <div class=" block is-flex is-flex-direction-column" style='height:100%; ' id='<?= $value['id']?>'>
                    <div class="dropdown " style='margin: 1%; '  >
                       <div class="dropdown-trigger">
                           <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                               <span><?= $value["nom"] ?></span>
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