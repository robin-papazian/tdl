<?php
    
    session_start();

    include("../Php/ModelEspace.php");

    $model = new ModelEspace;

    $user = $_SESSION['id'];

    $result = $model->getEspace($user);
    
    if(!empty($result))
    {
        echo json_encode($result);
    }
    else
    {
        echo 1;
    }
    
    

