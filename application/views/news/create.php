<main class="container mt-5">
    <h1 class="mb-5">Nouvel article</h1>
    <?= isset($echec)? $echec : "";?>
<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
<!--
    <label for="title">Title</label>
    <input type="text" name="title" /><br />

    <label for="text">Text</label>
    <textarea name="text"></textarea><br />

    <input type="submit" name="submit" value="Create news item" />
--> 

  <div class="form-group">
    <label for="title">Titre</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Entrez le titre de l'article">
  </div>
  <div class="form-group">
    <label for="text">Contenu</label>
    <textarea name="text" class="form-control" id="text" placeholder="Entrez votre texte"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>

</form>
</main>