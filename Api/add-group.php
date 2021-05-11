<?php

    include("../Php/ModelUtilisateur.php");

    $dataUser = new ModelUtilisateur;

    $id_espace = str_replace('groupe-','',$_POST['id_espace']);
    $email = $_POST['collaborateur'];

    $result = $dataUser->inDb("WHERE email = :email", compact('email'));

    if(!empty($result))
    {
        $collaborateur = $email;
        $dataUser->stickIn("INSERT INTO groupe (collaborateur, id_espace) VALUES (:collaborateur,:id_espace)",compact('collaborateur','id_espace'));
        echo 1;
    }
    else
    {
        echo 2;
    }
    
    
    