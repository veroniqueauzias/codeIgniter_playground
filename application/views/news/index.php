<main class="container mt-5">
        <?= isset($success)? $success : "";?>

<h1><?php echo $title; ?></h1>

<?php foreach ($news as $news_item): ?>

        <h2><?php echo $news_item['title']; ?></h2>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p class="customLink"><a href="<?php echo site_url('news/'.$news_item['slug']); ?>">Voir l'article</a></p>

<?php endforeach; ?>

<a href=<?php echo site_url('news/create'); ?>>
<button type="button" class="btn btn-primary">Ajouter un article</button>
</a>
</main>