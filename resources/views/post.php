<?php view('blocks.head', ['title'=> $post['title'] ?? '']); ?>
    <article>
        <h1><?= $post['title'] ?? '' ?></h1>
        <div class="metadata">
            <span class="date"><?= $post['created_at'] ?? '' ?></span>
        </div>
        <p>
            <?= $post['content'] ?? '' ?>
        </p>
        <a href="/update?id=<?= $post['id'] ?? 0?>">EDIT</a>
        <a href="/delete?id=<?= $post['id'] ?? 0?>">Delete</a>
    </article>

<?php view('blocks.footer'); ?>