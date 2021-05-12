                <?php include("../Php/Model.php"); $data = new Model;?>
                
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
                    <?php $id= $value['id']; $tache = $data->stickOut("SELECT * FROM tache WHERE id_liste = $id ")?>
                    <?php if(!empty($tache)):?>
                    <?php foreach($tache as $valueTache):?>
                    <div class="panel-block is-active is-flex is-justify-content-space-between" id="tache-<?=$valueTache['id']?>">
                        <a class="is-flex is-align-items-center tache_name" style='<?php if($valueTache["validation"] == 1){echo "text-decoration: line-through";}?>' >
                            <span class="panel-icon">
                                <i class="fas fa-book" aria-hidden="true"></i>
                            </span>
                            <?=$valueTache['nom']?>
                        </a>
                        <div >
                            <button class="button is-small is-success valide-tache"><i class="fas fa-check"></i></button>
                            <button class="button is-small is-danger delete-tache"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                        <div class="modal" id="modal-<?=$valueTache['id']?>">
                            <div class="modal-background"></div>
                            <div class="modal-card">
                            <header class="modal-card-head">
                                <p class="modal-card-title"><?=$valueTache['nom']?></p>
                                <button class="delete" aria-label="close"></button>
                            </header>
                            <section class="modal-card-body">
                                <div class="field">
                                    <label class="label">Nom</label>
                                    <div class="control has-icons-left">
                                        <input class="input" name='nom' value="<?=$valueTache['nom']?>">
                                        <span class="icon is-small is-left">
                                            <i class="fas fa-book"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="label">Description</label>
                                    <div class="control has-icons-left">
                                        <textarea class="textarea" name='description' ><?php if(!empty($valueTache['description'])){ echo $valueTache['description']; }else{echo 'Desciption de la tache';}?></textarea>
                                        
                                    </div>
                                </div>
                            </section>
                            <footer class="modal-card-foot">
                                <button class="button is-success edit-tache" >Editer</button>
                            </footer>
                        </div>
                    <?php endforeach;?>
                    <?php endif; ?>
                </article>
                <?php endforeach;?>
                <!-- 5 Ajouter dans heros body via modal newliste -->
                