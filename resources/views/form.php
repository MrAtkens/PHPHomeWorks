<?php view('blocks.head', ['title' => $title ?? '']); ?>

<form action="/<?= $action ?? 'create'?>" method="post">

    <?php if($post['id'] ?? false): ?>
        <input type="hidden" name="id" value="<?= $post['id']?>"/>
    <?php endif; ?>
    <div>
        <input type="text" name="title" placeholder="Input title" value="<?= $post['title'] ?? ''?>" />
    </div>

    <div>
        <textarea type="text" name="content" placeholder="Input content"> <?= $post['content'] ?? ''?> </textarea>
    </div>
    <button type="submit">Save</button>
</form>

<?php view('blocks.footer')?>