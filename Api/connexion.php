<?php
    session_start();

    include("../Php/ModelUtilisateur.php");

    $data = new ModelUtilisateur;

    $login = trim(htmlspecialchars($_POST['login']));
    $pass = trim(htmlspecialchars($_POST['password']));
    $array = compact('login');

    $result = $data->inDb("WHERE login = :login", $array);

    if(empty($result))
    {
        $response = 1;
    }
    else
    {
        $passcript = $result[0]['password'];
        $id = $result[0]['id'];
        $login = $result[0]['login'];
        $nom = $result[0]['nom'];
        $email = $result[0]['email'];
        if(password_verify($pass,$passcript))
        {

            $_SESSION['id'] = $id;
            $_SESSION['login'] = $login;
            $_SESSION['nom'] = $nom;
            $_SESSION['email'] = $email;

            $response = 2;   
        }
        else
        {
            $response = 3;
        }

    }

    echo $response;
    
