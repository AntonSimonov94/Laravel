<?php foreach ($catalog as $category => $des): ?>
    <h2><a href="<?= route('news.category', ['name' => $category]) ?>"><?php echo $category ?></a></h2>
    <hr>
<?php endforeach; ?>
