<?php

namespace App\Solid\SingleResponsibility\EX2;


class BadBlogPost{
    private $author;
    private $tittle;
    private $content;

    public function getData()
    {
        return [
            'author' => $this->author->fullName,
            'title' => $this->tittle,
            'content' => $this->content
        ];
    }

    public function printJson(): string
    {
        return json_encode($this->getData());
    }
 
    public function printHtml(): string
    {
        return `<article>
                    <h1>{$this->title}</h1>
                    <article>
                        <p>{$this->date->format('Y-m-d H:i:s')}</p>
                        <p>{$this->author->fullName()}</p>
                        <p>{$this->content}</p>
                    </article>
                </article>`;
    }
}