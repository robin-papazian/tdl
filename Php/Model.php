<?php


    class Model
    {
        protected $db;

        /** Initialise une connexion à chaque instance d'objet Model */
        public function __construct()
        {
            $this->setDb();
        }

        /** Initialise une connexion bdd */
        public function setDb() :PDO
        {
            require('Conf.php');

            $this->db = new PDO($link,$username,$password,array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

            return $this->db;
        }
    }