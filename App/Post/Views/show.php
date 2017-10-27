<h2>Je suis la page show</h2>
<h2><a href="/"></a><?= $post->title() ?></h2>
<p>Dernière modification : <?= $post->modificationDate() ?></p>
<p>Auteur : <?= $post->author() ?></p>
<p>Chapo : <?= $post->slug() ?></p>
<p><?= $post->content() ?></p>

<form action="edit/<?= $post->slug() ?>">
    <input type="submit" value="Modifier" />
</form>

<form action="../posts">
<input type="submit" value="Retour" />
</form>

<form action="../posts/delete" method="post">
    <input type="hidden" name='id' value="<?= $post->id() ?>" />
    <button type="submit" href="../posts/delete/<?= $post->id() ?>" >Supprimer</button>
</form>