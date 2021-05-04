                <?php foreach($_POST['array'] as $value): ?>
                <article class="panel is-success">
                    <p class="panel-heading">
                        <?=$value['nom']?>
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
                <?php endforeach;?>
                <!-- 5 Ajouter dans heros body via modal newliste -->