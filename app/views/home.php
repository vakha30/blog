<?php $this->layout('layout') ?>


<div class="container">
    <div class="row p-4">
        <div class="col-md-12">
            <h2 class="text-center">Статьи</h2>
        </div>
    </div>

    <div class="articles">

        <?php foreach($posts as $post): ?>
            <article class="article">
                <div class="article__img">
                    <img src="/uploads/<?= $post['image'] ?>" alt="" class="article__img">
                </div>
                <h5 class="article__title pt-2"><?= $post['title'] ?></h5>
                <p class="article__text">
                    <?= mb_substr($post['text'], 0, 60)  ?> ...
                </p>
                <p class="article__author">Автор: <a class="text-primary" href="#">Мансур</a></p>
                <p class="article__author">Категория: <a class="text-primary" href="#"><?= getCategory($post['category_id'])['title'] ?></a></p>
                <p class="article__author">Дата: <span class="text-secondary"><?= $post['date'] ?></span></p>
                <a href="article.html" class="article__link text-primary float-right">Прочитать</a>
            </article>
        <?php endforeach; ?>

    </div>
</div>