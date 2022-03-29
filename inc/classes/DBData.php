<?php

class DBData {

    private $pdo;

    public function __construct()
    {

        $dsn ='mysql:host=localhost;dbname=chiencool';
        $user='chiencool';
        $mdp='chiencool';

        try {
            $connexionDB = new PDO($dsn, $user, $mdp);
        } catch (PDOException $erreur){
            echo 'Connexion échouée car'.$erreur->getMessage();
        }

        $this->pdo = $connexionDB; 
    }

    public function getArticles(){
        
        $sql = 'SELECT * from article';

        $pdoStatement = $this->pdo->query($sql);

        $articlesList = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

        return $articlesList;
    }

}