
<form action="" method="post">
    <p>
        <label>Auteur</label>
        <input type="text" name="author" value="<?= isset($post) ? $post->author() : '' ?>" /><br />

        <label>Titre</label><input type="text" name="title" value="<?= isset($post) ? $post->title() : '' ?>" /><br />
        <label>Slug</label><input type="text" name="slug" value="<?= isset($post) ? $post->slug() : '' ?>" /><br />

        <label>Contenu</label><textarea rows="8" cols="60" name="content"><?= isset($post) ? $post->content() : '' ?></textarea><br />
        <?php
        if(isset($post) && !$post->isNew())
        {
            ?>
            <input type="hidden" name="id" value="<?= isset($post) ? $post->id() : '' ?>" />
            <input type="submit" value="Modifier" name="modifier" />
            <?php
        }
        else
        {
            ?>
            <input type="submit" value="Ajouter" />
            <?php
        }
        ?>
    </p>
</form>

<form action="../<?= isset($post) ? $post->slug() : 'web/posts' ?>">
    <input type="submit" value="Annuler" />
</form>