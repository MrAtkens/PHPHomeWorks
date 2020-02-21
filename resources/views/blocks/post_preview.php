<div>
    <h2><?= $post['title'] ?? '' ?></h2>
    <div>
        <?php if(strlen($post['content'])> 100) substr($post['content'] ?? '', 0, 100)?>
    </div>
    <a href="/post?id=<?=$post['id']?>">Know more</a>
</div>