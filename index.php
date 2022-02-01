<?php

require 'inc/classes/Article.php';
require 'inc/classes/Data.php';

$data = new Data();
//var_dump($data);

$articleLists = $data->getArticlesList();

//var_dump($articleLists);

//var_dump($_GET);

// Par défaut, je suis sur la page d'accueil, la template de la page d'accueil est home(.tpl.php)
$currentPage = "home";

// Je vérifie si ma super global $_GET est existante et qu'il y a bien une valeur associée à sa clé page. 
if(isset($_GET['page'])){
    // Je récupère la valeur du paramètre d'url nommé page et je la stocke dans ma variable currentPage. Ceci viendra "écraser" la valeur par défaut de $currentPage qui est home.
    $currentPage = $_GET['page'];
}

if($currentPage == "article"){
    if (isset($_GET['id'])){
        $articleId = $_GET['id'];
        $articleToDisplay = $data->selectionArticle($articleId);

        if($articleToDisplay == false){
            exit('Article non trouvé');
        } else {
            // si par exemple on n'a pas fourni d'id 
            //header('Location :index.php');
            echo 'coucou';
        }

    }
}


require __DIR__.'/inc/templates/header.tpl.php';
require __DIR__.'/inc/templates/'.$currentPage.'.tpl.php';
require __DIR__.'/inc/templates/footer.tpl.php';

