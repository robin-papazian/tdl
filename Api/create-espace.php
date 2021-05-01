<?php
    session_start();

    include("../Php/ModelEspace.php");

    $model = new ModelEspace;

    $nom = trim(htmlspecialchars($_POST['espace']));
    $id_createur = $_SESSION['id'];

    $array = compact('nom','id_createur');
    
    $model->insertEspace($array);


    $result = $model->getEspace($id_createur);
    

    echo json_encode($result);

    