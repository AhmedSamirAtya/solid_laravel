<?php

namespace App\Solid\SingleResponsibility\EX2;


class BlogPost
{
    private string $author;
    private string $title;
    private string $content;

    public function getData()
    {
        return [
            'author' => $this->author,
            'title' => $this->title,
            'content' => $this->content
        ];
    }

    public function getAuthor()
    {
        return $this->author;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
}
