<?php

class VideoPost extends ParentPost
{
    public function showContent(): void
    {
        $html = "<b>{$this->getTitle()}</b>";
        $html .= "<video>{$this->getContent()}</video>";

        echo $html;
    }
}