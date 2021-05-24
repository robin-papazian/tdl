
                <?php foreach($_POST['array'] as $value): ?>
                <?php if($value['collaborateur'] == NULL) : ?>
                <div class=" block is-flex is-flex-direction-column" style='height:100%; ' >
                    <div class="dropdown " style='margin: 1%; ' id='<?= $value['ID']?>' >
                       <div class="dropdown-trigger" >
                           <button class="button espace_button" aria-haspopup="true" aria-controls="dropdown-menu-<?=$value['nom']?>">
                               <span class='nom_espace'><?= $value["nom"] ?></span>
                                <span class="icon is-small"><i class="fas fa-angle-down" aria-hidden="true"></i></span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu-<?=$value['nom']?>" role="menu">
                            <div class="dropdown-content">
                                <a href="#" class="dropdown-item voir-espace" id="espace-<?= $value['ID']?>">
                                    Voir
                                </a>
                                <a class="dropdown-item add-membre" id="groupe-<?= $value['ID']?>">
                                    Ajouter un Membre
                                </a>
                                <a href="#" class="dropdown-item" id="supprime-<?= $value['ID']?>">
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
                <?php endif;?>
                <?php endforeach;?>
                <p class="menu-label">
                    Groupe de Travail
                </p>
                <?php foreach($_POST['array'] as $value): ?>
                <?php if($value['collaborateur'] != NULL) : ?>
                <div class=" block is-flex is-flex-direction-column" style='height:100%; ' >
                    <div class="dropdown " style='margin: 1%; ' id='<?= $value['ID']?>' >
                       <div class="dropdown-trigger" >
                           <button class="button espace_button" aria-haspopup="true" aria-controls="dropdown-menu-<?=$value['nom']?>">
                               <span class='nom_espace'><?= $value["nom"] ?></span>
                                <span class="icon is-small"><i class="fas fa-angle-down" aria-hidden="true"></i></span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu-<?=$value['nom']?>" role="menu">
                            <div class="dropdown-content">
                                <a href="#" class="dropdown-item voir-espace" id="espace-<?= $value['ID']?>">
                                    Voir
                                </a>
                                <a class="dropdown-item add-membre" id="groupe-<?= $value['ID']?>">
                                    Ajouter un Membre
                                </a>
                                <a href="#" class="dropdown-item" id="supprime-<?= $value['ID']?>">
                                    Supprimer
                                </a>
                                <hr class="dropdown-divider">
                                <div class='dropdown-item'>
                                    <strong><span>Creation</span></strong></br>
                                    <?= $value['date_creation']?>
                                </div>
                                <hr class="dropdown-divider">
                                <div class='dropdown-item'>
                                <strong><span>Menbre</span></strong></br>
                                    <?= $value['collaborateur']?></br>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <?php endif;?>
                <?php endforeach;?>
            
               
                <!-- 2: Espace ajouter dans le aside via input -->