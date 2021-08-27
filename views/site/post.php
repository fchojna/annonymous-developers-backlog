<?php

use app\models\Post;

/* @var $this yii\web\View */

$this->title = $post->title;
?>

<div class="site-post">

    <div class="post-header">
        <div class="container">
            <h1 class="title">
                <?= $post->title ?>
            </h1>
            <h1 class="subtitle">
                <?= $post->subtitle ?>
            </h1>
            <span class="date">
                <?= $post->date ?>
            </span>
        </div>
    </div>
    <div class="body">
        <div class="container pt-3">
            <?= $post->body ?>
        </div>
    </div>

</div>