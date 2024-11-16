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
    <input type="text" class="form-control" name="title" value="<?= old("title", esc($article["title"])) ?>">
</div>
<div class="mb-3">
    <label for="content" class="form-label">
        content
    </label>
    <textarea class="form-control" rows="3" name="content">
        <?= old("content", esc($article["content"])) ?>
    </textarea>
</div>
<div class="mb-3">
    <button class="btn btn-primary">Save</button>
</div>