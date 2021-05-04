
                <?php foreach($_POST['array'] as $value): ?>
                <div class=" block is-flex is-flex-direction-column" style='height:100%; ' >
                    <div class="dropdown " style='margin: 1%; ' id='<?= $value['id']?>' >
                       <div class="dropdown-trigger" >
                           <button class="button espace_button" aria-haspopup="true" aria-controls="dropdown-menu-<?=$value['nom']?>">
                               <span class='nom_espace'><?= $value["nom"] ?></span>
                                <span class="icon is-small"><i class="fas fa-angle-down" aria-hidden="true"></i></span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu-<?=$value['nom']?>" role="menu">
                            <div class="dropdown-content">
                                <a href="#" class="dropdown-item voir-espace" id="espace-<?= $value['id']?>">
                                    Voir
                                </a>
                                <a class="dropdown-item add-membre" id="groupe-<?= $value['id']?>">
                                    Ajouter un Membre
                                </a>
                                <a href="#" class="dropdown-item" id="supprime-<?= $value['id']?>">
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
            
               
                <!-- 2: Espace ajouter dans le aside via input -->