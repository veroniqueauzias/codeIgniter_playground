<main class="container mt-5">
<?php
  if($this->session->flashdata('error')):?>
    <div class="alert alert-success" role="alert">
            <?=$this->session->flashdata('success');
            endif ?>
    </div>
<?php
echo '<h1>'.$news_item['title'].'</h1>';
echo $news_item['text'];
?>
<div class="mt-5">
    <a href="<?php echo site_url('news/update/'.$news_item['slug']); ?>"
    <button type="button" class="btn btn-primary">Modifier l'article</button>
    </a>
</div>
<div class="mt-2">
    <button type="button" class="btn btn-primary" ONCLICK="confirmer()" >Supprimer l'article</button>
</div>
</main>

    <!-- JS pour popup confirmation delete -->
<script>
    function confirmer() {
        var result = confirm("Etes vous sûrs de vouloir supprimer cet article?")
        if (result == true) {
            document.location.href = "<?php echo site_url('news/delete/'.$news_item['slug']); ?>";
        } else {
            document.location.href = "<?php echo site_url('news/view/'.$news_item['slug']); ?>";
        }
    }
</script>

