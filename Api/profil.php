<?php
    session_start();

    include("../Php/ModelUtilisateur.php");

    $model = new ModelUtilisateur;
    $user = $_SESSION['login'];
    $data = $_POST['updateUser'];
    
    foreach($data as $key => $value)
    {
        $data[$key] = trim(htmlspecialchars($value));
    }
    
    $tableau = array(
        'set'      => '',
        'execute'  => array()
    );

    $set = '';
    

    foreach($data as $key => $value)
    {
    
        if(!empty($value))
        {
            $set .= $key." = :$key,";
        }
        else
        {
            unset($data[$key]);
        }
    }

    $lastChar = strlen($set) -1 ;
    $set = substr_replace($set,'', $lastChar);
    $tableau['set'] = $set;
    $tableau['execute'] = $data;
    $tableau['execute'] = array_merge($tableau['execute'],array('id'=> $_SESSION['id']));
   

    try
    {
        $model->updateDb($tableau['set'],$user,$tableau['execute']);
        $response = true;
    }catch(Exception $e)
    {
        $response = substr($e->getMessage(),-6);
    }

    echo $response;

   
    // $array = compact('nom','login','email','password');
    // $allisok = false;
    // try
    // {
    //     $data->insertDb($array);
    //     $allisok = true;
    // }catch(Exception $e)
    // {
    //     echo substr($e->getMessage(),-6);
    // }

    // echo $allisok;
