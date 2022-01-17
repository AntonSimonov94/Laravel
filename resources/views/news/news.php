<?php foreach ($catalog as $category => $products):
    if ($name == $category) {
        foreach ($products as $product => $des):
            if ($news == $product) {
                ?>
                <p><?php echo $des ?></p>
                <?php
            }endforeach;
    }
endforeach; ?>
