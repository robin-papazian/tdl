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

        /**
         * Execute une requet prepare
         */
        public function stickIn($sql, $array=[])
        {
            $query = $this->db->prepare($sql);
            $query->execute($array);
        }

        /**
         * Retourne le resulta d'une requete prepare
         * 
         */
        public function stickOut( $sql, array $array=[])
        {
            $query = $this->db->prepare($sql);
            $query->execute($array);
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>