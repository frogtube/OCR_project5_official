<h2>Je suis la page index</h2>

<ul>
    <?php foreach ($posts as $post): ?>
    <h2><a href="../web/posts/<?= $post->slug() ?>"><?= $post->title() ?></a></h2>
        <p>Dernière modification : <?= $post->modificationDate() ?></p>
        <p>Auteur : <?= $post->author() ?></p>
        <p>Chapo : <?= $post->slug() ?></p>
    <?php endforeach; ?>
</ul>

<form action="new">
    <input type="submit" value="New article" />
</form>