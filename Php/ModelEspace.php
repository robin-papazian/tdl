<?php

    require('Model.php');

    class ModelEspace extends Model
    {


        public function insertEspace($array)
        {
            $sql = "INSERT INTO espace (nom, id_createur) VALUES (:nom, :id_createur)";
            $result = $this->stickIn($sql,$array);
            return $result;

        }
    }
