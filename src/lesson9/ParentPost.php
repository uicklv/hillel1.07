<?php

abstract class ParentPost
{
    private string $title;

    private string $content;

    public function __construct(string $title, string $content)
    {
        $this->setTitle($title);
        $this->setContent($content);
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->validateText($title);
        $this->title = $title;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->validateText($content);
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    private function validateText(string $text): void
    {
        if (strlen($text) < 5) {
            throw new Exception('Invalid property');
        }
    }

    abstract public function showContent(): void;
}