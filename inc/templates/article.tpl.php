<h2>Je suis une page article</h2>

<?php 
//var_dump($_GET);

$id = $_GET['id'];

//var_dump($id);
//var_dump($dataArticlesList[$id]);

//echo $dataArticlesList[$id]['title'];
//var_dump($articleToDisplay);

?>


<h2><?= $articleToDisplay->getTitle();?></h2>
<?= $articleToDisplay->getContent();?>
<p><?= $articleToDisplay->getAuthor()?></p>
<p><?=$articleToDisplay->getDate()?></p>
<p><?=$articleToDisplay->getCategory();?></p>