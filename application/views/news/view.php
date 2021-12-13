<main class="container mt-5">
<?php
echo '<h1>'.$news_item['title'].'</h1>';
echo $news_item['text'];
?>
<div class="mt-5">
    <a href="<?php echo site_url('news/update/'.$news_item['slug']); ?>"
    <button type="button" class="btn btn-primary">Modifier l'article</button>
    </a>
</div>
</main>