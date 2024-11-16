<?= $this->extend("layouts/default"); ?>

<?= $this->section("title") ?>Article<?= $this->endSection() ?>

<?= $this->section("content") ?>

<h1><?= esc($article->title) ?></h1>

<p><?= esc($article->content) ?></p>

<p><a href="<?= url_to("Articles::edit", $article->id) ?>">Edit article</a></p>

<?= $this->endSection() ?>