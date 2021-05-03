<?php

    include("../Php/Model.php");

    $data = new Model;
    $id_espace = str_replace('espace-','',$_POST['id_espace']);
    $nom =  $_POST['nom_liste'];

    $data->stickIn("INSERT INTO liste (nom,id_espace) VALUES (:nom,:id_espace)",compact('nom','id_espace'));



