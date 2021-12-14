<main class="container mt-5">
<h1 class="mb-5"><?=$title?></h1>
<?php echo validation_errors(); ?>

<?php echo form_open('news/update/' . $news_item['slug']); ?>

  <div class="form-group">
    <label for="title">Titre</label>
    <input type="text" class="form-control" id="title" name="title" value="<?= $news_item['title'] ?>">
  </div>
  <div class="form-group">
    <label for="text">Contenu</label>
    <textarea name="text" class="form-control" id="text"><?= $news_item['text'] ?></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</main>