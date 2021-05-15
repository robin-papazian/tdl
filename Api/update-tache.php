<?php

    include("../Php/Model.php");

    $model = new Model;

    $id = str_replace('modal-','',$_POST['id']);

    $nom = $_POST['newName'];

    $description = $_POST['newVal'];

    if(!empty($nom) && !empty($description))
    {
        $array = compact('id','nom','description');
        $model->stickIn('UPDATE tache SET nom =:nom , description = :description WHERE id = :id', $array );
    }
    elseif(!empty($nom) && empty($description))
    {
        $array = compact('id','nom');
        $model->stickIn('UPDATE tache SET nom =:nom WHERE id = :id', $array );
    }
    elseif(empty($nom) && !empty($description))
    {
        $array = compact('id','description');
        $model->stickIn('UPDATE tache SET description = :description WHERE id = :id', $array );
    }

    
    $id_liste = $model->stickOut("SELECT id_liste FROM tache WHERE id = $id");
    $id_liste =  $id_liste[0]['id_liste'];
    
    $id_espace = $model->stickOut("SELECT id_espace FROM liste WHERE id = $id_liste");
    $id_espace =  $id_espace[0]['id_espace'];

    $response = $model->stickOut("SELECT * FROM liste WHERE id_espace = $id_espace");

    echo json_encode($response);