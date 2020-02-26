<div>
    <article class="blog-card">
        <div class="article-details">
            <h3 class="post-title"><?= $post['title'] ?? '' ?></h3>
            <p>
                <?= $post['content'] ?? '' ?>

            </p>
            <a class="post-view" href="/post?id=<?=$post['id']?>">Know more</a>
        </div>
    </article>
    </a>
</div>