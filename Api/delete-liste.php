<?php

    include("../Php/Model.php");

    $model = new Model;

    $id_liste = str_replace('#liste-','',$_POST['id']);

    $id_espace = $model->stickOut("SELECT id_espace FROM liste WHERE id = $id_liste");

    $id_espace = $id_espace[0]['id_espace'];

    $model->stickIn("DELETE FROM liste WHERE id = $id_liste");

    $result = $model->stickOut("SELECT * FROM liste WHERE id_espace = :id_espace",compact('id_espace'));

    if(!empty($result))
    {
        echo json_encode($result);

    }
    
    
   