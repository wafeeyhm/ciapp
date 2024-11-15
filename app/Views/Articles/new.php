<?= $this->extend("layouts/default"); ?>

<?= $this->section("title") ?>New Article<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1>New Article</h1>

<?= form_open("articles/create") ?>

<?php if(session()->has("errors")): ?>

<div class="alert alert-warning">
    <ul>
        <?php foreach(session("errors") as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
</div>

<?php endif; ?>

<div class="mb-3">
    <label for="title" class="form-label">
        Title
    </label>
    <input type="text" class="form-control" name="title">
</div>
<div class="mb-3">
    <label for="content" class="form-label">
        content
    </label>
    <textarea class="form-control" rows="3" name="content"></textarea>
</div>
<div class="mb-3">
    <button class="btn btn-primary">Save</button>
</div>

<?= form_close() ?>

<?= $this->endSection() ?>