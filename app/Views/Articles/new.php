<?= $this->extend("layouts/default"); ?>

<?= $this->section("title") ?>New Article<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>New Article</h1>

<?= form_open("articles/create") ?>

<?= $this->include("Articles/form") ?>

<?= form_close() ?>

<?= $this->endSection() ?>