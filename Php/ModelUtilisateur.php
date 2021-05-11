<?php

    require('Model.php');

    class ModelUtilisateur extends Model
    {

        public function inDb($param,$array)
        {
            $user = $this->stickOut("SELECT * FROM utilisateurs $param",$array);
            return $user;
        }

        /**
         * Insert un utilisateur
         */

        public function insertDb($array)
        {
            $sql = "INSERT INTO utilisateurs (login, nom, email, password) VALUES (:login, :nom, :email, :password)";
            $result = $this->stickIn($sql,$array);
            return $result;

        }

        public function updateDb($colonnes, $user, $array)
        {
            $sql = "UPDATE utilisateurs SET $colonnes WHERE id = :id";
            $result = $this->stickIn($sql,$array);
            return $result;

        }
    }