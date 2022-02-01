<?php

class Data {
    private $articlesList;
    private $authorsList;
    private $categoriesList;

    public function __construct()
    {
        require __DIR__.'/../data/datas.php';
        $this->articlesList = $dataArticlesList;
        $this->authorsList = $dataAuthorsList;
        $this->categoriesList = $dataCategoriesList;

    }
    /* methode qui me permet de récupérer la liste de tous mes articles*/

    public function getArticlesList(){
        return $this->articlesList;
    }

    public function getAuhorsList(){
        return $this->authorsList;
    }

    public function getCategoriesList(){
        return $this->categoriesList;
    }

    /* J'ai besoin d'une méthode qui me retourne un seul article en fonction d'un id */
    public function selectionArticle(int $id){
        // J'ai besoin de ma liste d'articles : $this->$articlesList
        if(isset($this->articlesList[$id])){
            return $this->articlesList[$id];
        } else {
            // Ici ma fonction n'a rien trouvé dans l'index de articlesList qui correspond au paramètre qui lui ont fourni
            return false;
        }
    }

}