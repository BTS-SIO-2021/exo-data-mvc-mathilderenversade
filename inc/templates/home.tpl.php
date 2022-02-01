<!-- Emmet: article*4>h2>lorem6^p>lorem26 -->
<?php 
//var_dump($dataArticlesList);

foreach($articleLists as $key => $articleItem) :?>
<article>
    <h2><a href='index.php?page=article&id=<?=$key;?>'><?=$articleItem->getTitle();?></a></h2>
    <?= $articleItem->getContent();?>
</article> 
<?php endforeach;?>
