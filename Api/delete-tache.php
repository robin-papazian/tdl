<?php

    include("../Php/Model.php");

    $model = new Model;

    $id_tache = str_replace('tache-','',$_POST['id']);

    $id_liste = $model->stickOut("SELECT id_liste FROM tache WHERE id = $id_tache");
    $id_liste =  $id_liste[0]['id_liste'];

    $id_espace = $model->stickOut("SELECT id_espace FROM liste WHERE id = $id_liste");
    $id_espace =  $id_espace[0]['id_espace'];

    $model->stickIn("DELETE FROM tache WHERE id = $id_tache" );

    $response = $model->stickOut("SELECT * FROM liste WHERE id_espace = $id_espace");

    echo json_encode($response);