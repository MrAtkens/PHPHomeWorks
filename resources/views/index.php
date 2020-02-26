<?php
view('blocks.head', [
    'title' => $title ?? ''
]);

//var_dump($posts); die;

foreach ($posts ?? [] as $post)
    view('blocks.post_preview', [
        'post' => $post
    ]);

view('blocks.footer');