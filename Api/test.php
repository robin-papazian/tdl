<?php

    include("../Php/Model.php");

    $data = new Model;

    $admin = $data->stickOut("SELECT * FROM `espace` LEFT JOIN groupe ON espace.id = groupe.id_espace WHERE id_createur = 64 ");

    echo '<pre>';
    var_dump($admin);
    echo '</pre>';
    $a = '';
    $c = [];
    echo '</br>';
    $invit = $data->stickOut("SELECT * FROM `groupe` LEFT JOIN espace ON groupe.id_espace = espace.id WHERE collaborateur = 'bbbb@bbbb' ");
    
    echo '<pre>';
    var_dump($invit);
    echo '</pre>';
    
    foreach($admin as $key => $value)
    {
        
   
        if($value['collaborateur'] == NULL)
        {
            echo $value['nom'].'</br>';
        }
        if($value['collaborateur'] != NULL)
        {
            $a .= ' '.$value['collaborateur'];
            $c[$value['nom']] = '';
           

        }
    }
    echo '<pre>';
    var_dump($c);
    echo '</pre>';
    

    //$result = $data->stickOut("SELECT * FROM `espace` LEFT JOIN groupe ON espace.id = groupe.id_espace WHERE id_createur = 64 ");

    
    // foreach($result as $value)
    // {
    //     if($value['collaborateur'] != NULL)
    //     {
    //         echo array_diff($result);
    //     }
        
    // }
   

