<?php foreach ($catalog as $category => $products):
    if ($name == $category) {
        foreach ($products as $product => $des):?>
            <h3><a href="<?= route('news.news', ['name' => $category, 'des' => $product]) ?>"><?php echo $product ?></a>
            </h3>
            <hr>
        <?php
        endforeach;
    }
endforeach; ?>
