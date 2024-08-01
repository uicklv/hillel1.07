<?php

class Post extends ParentPost
{
    public function showContent(): void
    {
        $html = "<h3>{$this->getTitle()}</h3>";
        $html .= "<p>{$this->getContent()}</p>";

        echo $html;
    }
}