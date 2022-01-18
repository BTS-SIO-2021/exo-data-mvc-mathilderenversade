<!-- Emmet: article*4>h2>lorem6^p>lorem26 -->
<?php 
//var_dump($dataArticlesList);

foreach($dataArticlesList as $key => $articleItem) :?>
<article>
    <h2><?=$articleItem['title'];?></h2>
    <?= $articleItem['content'] ;?>
</article>
<?php endforeach;?>
