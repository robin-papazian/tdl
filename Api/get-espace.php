<?php
    session_start();

    include("../Php/Model.php");

    $model = new Model;

    $user = $_SESSION['id'];
    $email = $_SESSION['email'];

    $result = $model->stickOut("SELECT espace.id AS ID, espace.nom, espace.id_createur, espace.date_creation, groupe.id AS ID_GROUPE, groupe.collaborateur, groupe.id_espace FROM `espace` LEFT JOIN groupe ON espace.id = groupe.id_espace WHERE `id_createur` = $user OR `collaborateur` = '$email' ");
    $array = $result;
   
    foreach($result as $val)
    {
        for($i=0; $i <= count($array) -1; $i++)
        {
            if($array[$i]['id_espace'] != NULL && $array[$i]['collaborateur'] !=NULL)
            {
                if($val['id_espace'] == $array[$i]['id_espace'] && (strpos($array[$i]['collaborateur'], $val['collaborateur']) === false))
                {
                    $array[$i]['collaborateur'] .= '<br/>'.$val['collaborateur'];
                }
            }
        }
    }

    for ($x = 0; $x != count($array); $x++){
        if ($x > 0 && $array[$x]['id_espace'] == $array[$x - 1]['id_espace']){
            //echo $x . ' ';    
            array_splice($array,1, $x);
            $x--;
        }
    }

    if(!empty($array))
    {
        echo json_encode($array);
    }
    else
    {
        echo 1;
    }
   
    