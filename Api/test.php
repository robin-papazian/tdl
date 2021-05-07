<?php
    session_start();
    include("../Php/Model.php");

    //$id = $_SESSION['id'];
    //$email = $_SESSION['email'];
    $data = new Model;
    $admin = $data->stickOut("SELECT * FROM `espace` LEFT JOIN groupe ON espace.id = groupe.id_espace WHERE id_createur = 64 ");

    $espaceSolo = array('solo' =>'');
    $espaceGroup = [];//array('groupe' =>array());

    $invit = $data->stickOut("SELECT * FROM `groupe` LEFT JOIN espace ON groupe.id_espace = espace.id WHERE collaborateur = 'bbbb@bbbb' ");
    
    foreach($admin as $key => $value)
    {
        if($value['collaborateur'] == NULL)
        {
            array_push($espaceSolo,$admin[$key]);
        }
        elseif($value['collaborateur'] != NULL)
        {
            array_push($espaceGroup,$admin[$key]);
        }
    }

    foreach($invit as $key => $value)
    {
        array_push($espaceGroup,$invit[$key]);
    }
    echo '<pre>';
    var_dump($espaceSolo);
    echo '</pre>';


    $test = [];
    echo '<pre>';
    var_dump($espaceGroup);
    echo '</pre>';

    foreach($espaceGroup as $key => $value)
    {
       
    }
  

   


    
    
    //echo json_encode(array("solo"=>$espaceSolo,'admin'=>$espaceAdmin,'collab'=> $espaceCollab));
    //echo json_encode($espaceSolo);