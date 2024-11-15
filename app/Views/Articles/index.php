<?= $this->extend("layouts/default"); ?>

<?= $this->section("title") ?>Article<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Articles section</h1>

<?php foreach ($articles as $article): ?>

<article>
    <h2><?= $article["title"] ?></h2>
    <p><?= $article["content"] ?></p>
</article>

<?php endforeach; ?>

<?= $this->endSection() ?>