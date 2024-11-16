<?= $this->extend("layouts/default"); ?>

<?= $this->section("title") ?>Edit Article<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>Edit Article</h1>

<?= form_open("articles/update/" . $article->id) ?>

<?= $this->include("Articles/form") ?>

<?= form_close() ?>

<?= $this->endSection() ?>