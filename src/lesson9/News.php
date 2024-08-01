<?php

class News extends ParentPost
{
    public function showContent(): void
    {
        $html = "<i>{$this->getTitle()}</i>:";
        $html .= "<b>{$this->getContent()}</b>";

        echo $html;
    }
}