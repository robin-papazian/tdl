<?php 
    include("../Php/Model.php");
    $model = new Model;
    $groupe = $_POST['array'];
    foreach($groupe as $key => $value)
    {
        for($i=0; $i<count($value);$i++)
        {
            if($value[$i]['collaborateur'] != NUll)
            {?>
                <div class=" block is-flex is-flex-direction-column" style='height:100%; ' >
                    <div class="dropdown " style='margin: 1%; ' id='<?= $value[$i]['id_espace']?>' >
                       <div class="dropdown-trigger" >
                           <button class="button espace_button" aria-haspopup="true" aria-controls="dropdown-menu-<?=$value['nom']?>">
                               <span class='nom_espace'><?= $value["nom"] ?></span>
                                <span class="icon is-small"><i class="fas fa-angle-down" aria-hidden="true"></i></span>
                            </button>
                        </div>
                        <div class="dropdown-menu" id="dropdown-menu-<?=$value['nom']?>" role="menu">
                            <div class="dropdown-content">
                                <a href="#" class="dropdown-item voir-espace" id="espace-<?= $value[$i]['id_espace']?>">
                                    Voir
                                </a>
                                <a class="dropdown-item add-membre" id="groupe-<?= $value[$i]['id_espace']?>">
                                    Ajouter un Membre
                                </a>
                                <a href="#" class="dropdown-item" id="supprime-<?= $value[$i]['id_espace']?>">
                                    Supprimer
                                </a>
                                <hr class="dropdown-divider">
                                <div class='dropdown-item'>
                                    <span>Creation</span></br>
                                    <strong><?= $value[$i]['date_creation']?></strong>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            <?php } 
            elseif($value[$i]['collaborateur'] == NUll) 
            { 
                $nameEspace = '';
                $nameEspace .= $value['nom'].',';
                echo $nameEspace;
                
            }
            break ; 
            
        }
    }
    


?>



            