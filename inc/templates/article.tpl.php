<h2>Je suis une page article</h2>

<?php 
//var_dump($_GET);

$id = $_GET['id'];

//var_dump($id);
//var_dump($dataArticlesList[$id]);

//echo $dataArticlesList[$id]['title'];

?>

<h2><?= $dataArticlesList[$id]['title'];?></h2>
<?= $dataArticlesList[$id]['content'];?>
<p><?=$dataArticlesList[$id]['author'];?></p>
<p><?=$dataArticlesList[$id]['date'];?></p>
<p><?=$dataArticlesList[$id]['category'];?></p>