<h2>Je suis la page index</h2>

<?php
    var_dump($posts);

?>

<ul>
    <?php foreach ($posts as $post): ?>
    <li><a href=""></a><?= $post->title ?></li>

    <?php endforeach; ?>
</ul>
