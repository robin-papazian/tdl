<?php

    include("../Php/Model.php");

    $model = new Model;

    $id_tache = str_replace('tache-','',$_POST['id']);

    $tache = $model->stickOut("SELECT validation FROM tache WHERE id = $id_tache");
    
    if($tache[0]['validation'] == 0)
    {
        $model->stickIn("UPDATE tache SET validation = 1 WHERE id = $id_tache");
    }
    else
    {
        $model->stickIn("UPDATE tache SET validation = 0 WHERE id = $id_tache");
    }

    $id_liste = $model->stickOut("SELECT id_liste FROM tache WHERE id = $id_tache");
    $id_liste =  $id_liste[0]['id_liste'];

    $id_espace = $model->stickOut("SELECT id_espace FROM liste WHERE id = $id_liste");
    $id_espace =  $id_espace[0]['id_espace'];

    $response = $model->stickOut("SELECT * FROM liste WHERE id_espace = $id_espace");

    echo json_encode($response);
   