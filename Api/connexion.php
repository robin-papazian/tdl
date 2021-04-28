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
        $user = $result[0]['login'];
        if(password_verify($pass,$passcript))
        {
            $_SESSION['login'] = $user;
            $response = 2;   
        }
        else
        {
            $response = 3;
        }

    }

    echo $response;
    
