<?php

use lesson9\ParentPost;

function showPost(ParentPost $post): void
{
    $post->showContent();
}

//function showPost($post): void
//{
//    $html = '';
//    if ($post instanceof Post) {
//        $html = "<h3>{$post->getTitle()}</h3>";
//        $html .= "<p>{$post->getContent()}</p>";
//    } elseif ($post instanceof News) {
//        $html = "<i>{$post->getTitle()}</i>:";
//        $html .= "<b>{$post->getContent()}</b>";
//    }
//
//
//    echo $html;
//}