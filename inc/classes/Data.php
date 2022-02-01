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
}