<?php

    include("../Php/ModelUtilisateur.php");

    $data = new ModelUtilisateur;

    $nom = trim(htmlspecialchars($_POST['nom']));
    var_dump($nom);
    $login = trim(htmlspecialchars($_POST['login']));
    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));
    $password = password_hash($password,PASSWORD_BCRYPT);
    $password = $password;

    $result = compact($nom,$login,$email,$password);
    var_dump($result);

    $data->insertDb($result);

    

?>