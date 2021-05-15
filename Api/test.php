<?php

    include("../Php/ModelUtilisateur.php");

    $model = new Model;

    $result = $model->stickOut("SELECT * FROM `espace` LEFT JOIN groupe ON espace.id = groupe.id_espace WHERE `id_createur` = 66 OR `collaborateur` = 'ruru@lapateforme.io' ");
    echo '<pre>';
    var_dump($result);
    echo '<pre>';


    // echo '<pre>';
    // var_dump($result);
    // echo '<pre>';



    foreach($result as $val)
    {

        for($i=1; $i <= count($result) -1; $i++)
        {
            if($val['id_espace'] != NULL && $val['collaborateur'] !=NULL)
            {

                if($val['id_espace'] == $result[$i]['id_espace'])
                {
                    $val['collaborateur'] .= $result[$i]['collaborateur'];
                    unset($result[$i]);
                    //echo $result[$i]['collaborateur'] .' ';
                    echo $val['collaborateur'].'<br>';
                


                }

            }
        break;

        }

    }

    //  echo '<pre>';
    // var_dump($result);
    // echo '<pre>';
