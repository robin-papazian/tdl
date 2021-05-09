<?php
    session_start();
    include("../Php/Model.php");

    //$id = $_SESSION['id'];
    //$email = $_SESSION['email'];
    $data = new Model;
    
    //Espace solo + Administrateur
    $admin = $data->stickOut("SELECT * FROM `espace` LEFT JOIN groupe ON espace.id = groupe.id_espace WHERE id_createur = 64 ");
    //Les nom Espace solo + Administrateur
    $adminNom = $data->stickOut("SELECT DISTINCT nom FROM `espace` LEFT JOIN groupe ON espace.id = groupe.id_espace WHERE id_createur = 64");
    
    //Espace invitation recut
    $invit = $data->stickOut("SELECT * FROM `groupe` LEFT JOIN espace ON groupe.id_espace = espace.id WHERE collaborateur = 'bbbb@bbbb' ");
    //Les Nom Espace invitation 
    $invitNom = $data->stickOut("SELECT DISTINCT nom FROM `groupe` LEFT JOIN espace ON groupe.id_espace = espace.id WHERE collaborateur = 'bbbb@bbbb' ");
    
   
    
    $compare = array_merge($admin,$invit);
    
    $groupe = array_merge($adminNom, $invitNom);
    

    foreach($groupe as $index => $value)
    {
        foreach($compare as $indexC => $valueCom)
        {
            if($value['nom'] == $valueCom['nom'])
            {
                $insert = array_diff($compare[$indexC], $groupe[$index]);
                array_push($groupe[$index], $insert );
                
            }
        }
    }
    echo json_encode($groupe);