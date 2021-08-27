<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Post List';
?>

<div class="site-postlist">
    <div class="container">

        <h1 class="m-3">
            Posty
        </h1>

        <div class="post-list">
            <?php foreach ($posts as $post) : ?>
                <div class="post">
                    <h1 class="title">
                        <a href="/index.php?r=site%2Fpost&id=<?= $post->id ?>"><?= $post->title ?></a>
                        <span class="date">
                            <?= $post->date ?>
                        </span>
                    </h1>
                    <h1 class="subtitle">
                        <?= $post->subtitle ?>
                    </h1>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</div>