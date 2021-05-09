                <?php

                    include("../Php/Model.php");

                    $data = new Model;

                    //$liste = $data->stickOut()

                    
                
                
                ?>
                
                <?php foreach($_POST['array'] as $value): ?>
                <article class="panel is-success">
                    <p class="panel-heading">
                        <?=$value['nom']?>
                    </p>
                    <div class="field has-addons" id="createtache-<?=$value['id']?>">
                        <label class="label "></label>
                        <div class="control ">
                            <input class="input " type="text" placeholder="Nouvelle tache" >
                        </div>
                        <div class="control">
                            <a class="button is-info tache" >
                                Créer
                            </a>
                        </div>
                    </div>
                    <?php $id= $value['id']; $liste = $data->stickOut("SELECT * FROM tache WHERE id_liste = $id ")?>
                    <?php if(!empty($liste)):?>
                    <?php foreach($liste as $valueList):?>
                    <div class="panel-block is-active is-flex is-justify-content-space-between">
                        <a class="is-flex is-align-items-center">
                            <span class="panel-icon">
                                <i class="fas fa-book" aria-hidden="true"></i>
                            </span>
                            <?=$valueList['nom']?>
                        </a>
                        <div >
                            <button class="button is-small is-success"><i class="fas fa-check"></i></button>
                            <button class="button is-small is-danger"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <?php endforeach;?>
                    <?php endif; ?>
                </article>
                <?php endforeach;?>
                <!-- 5 Ajouter dans heros body via modal newliste -->
                <!-- <div class="modal is-active">
                <div class="modal-background"></div>
                <div class="modal-card">
                    <header class="modal-card-head">
                        <p class="modal-card-title">Le_nom_de_tache</p>
                        <button class="delete" aria-label="close"></button>
                    </header>
                    <section class="modal-card-body">
                        <div class="field">
                            <label class="label">Nom</label>
                            <div class="control has-icons-left">
                                <input class="input" type="email" value="Le_nom_de_tache">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-book"></i>
                                </span>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Description</label>
                            <div class="control has-icons-left">
                                <textarea class="textarea" placeholder="Explain how we can help you"></textarea>
                                
                            </div>
                        </div>
                    </section>
                    <footer class="modal-card-foot">
                        <button class="button is-success">Editer</button>
                    </footer>
                </div>
            </div> -->