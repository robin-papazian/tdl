<?php
    
    session_start();

    include("../Php/ModelEspace.php");

    $model = new ModelEspace;

    $id_createur = $_SESSION['id'];
    $id = str_replace('supprime-','',$_POST['id_espace']);
    $model->stickIn("DELETE FROM espace WHERE id = $id");
    $result = $model->getEspace($id_createur);
    echo json_encode($result);
