<?php

    require('Model.php');

    class ModelUtilisateur extends Model
    {

        public function inDb()
        {
            $user = $this->stickOut("SELECT * FROM utilisateurs");
            return $user;
        }

        /**
         * Insert un utilisateur
         */

        public function insertDb($array)
        {
            $sql = "INSERT INTO utilisateurs (login, nom, email, password) VALUES (:login, :nom, :email, :password), $array";
            var_dump($sql);
            $this->stickIn($sql);

        }
    }