<?php

    include("../Php/ModelUtilisateur.php");

    $data = new ModelUtilisateur;

    $nom = trim(htmlspecialchars($_POST['nom']));
    $login = trim(htmlspecialchars($_POST['login']));
    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));
    $password = password_hash($password,PASSWORD_BCRYPT);
    $password = $password;
    $array = compact('nom','login','email','password');
    $allisok = false;
    try
    {
        $data->insertDb($array);
        $allisok = true;
    }catch(Exception $e)
    {
        echo substr($e->getMessage(),-6);
    }

    echo $allisok;

?>