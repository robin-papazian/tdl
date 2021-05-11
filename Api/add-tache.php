<?php

    include("../Php/Model.php");

    $model = new Model;

    $id_liste =  str_replace('createtache-','',$_POST['id']); 
    $nom = trim(htmlspecialchars($_POST['input']));
    if(!empty($id_liste) && !empty($nom)) 
    {
        $model->stickIn("INSERT INTO tache (nom,id_liste) VALUES(:nom,:id_liste)",compact('nom','id_liste'));
        $id_espace = $model->stickOut("SELECT id_espace from liste WHERE id = $id_liste");
        $id = $id_espace[0]['id_espace'];
        $listes = $model->stickOut("SELECT * FROM liste WHERE id_espace = $id");
        echo json_encode($listes);
    }
    

    

