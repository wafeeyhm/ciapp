<?= $this->extend("layouts/default"); ?>

<?= $this->section("title") ?>Article<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Articles section</h1>

<p><a href="<?= url_to("Articles::new") ?>">Add new article</a></p>

<?php foreach ($articles as $article): ?>

<article>
    <a href="<?= site_url('/articles/'. $article["id"]) ?>"><h2><?= esc($article["title"]) ?></h2></a>
    <p><?= esc($article["content"]) ?></p>
</article>

<?php endforeach; ?>

<?= $this->endSection() ?>