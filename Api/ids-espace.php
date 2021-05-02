<?php


    include("../Php/ModelEspace.php");

    $model = new ModelEspace;

    $result = $model->stickOut("SELECT id FROM espace");

    echo json_encode($result);
    



?>