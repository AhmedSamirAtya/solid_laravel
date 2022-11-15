<?php

namespace App\Solid\SingleResponsibility\EX2;

use App\Solid\SingleResponsibility\EX2\BlogPost;
use App\Solid\SingleResponsibility\EX2\PrintableBlogPost;

class HtmlBlogPostPrinter implements PrintableBlogPost
{
    public function print(BlogPost $blogPost)
    {
        return "<article>
                    <h1>{$blogPost->getTitle()}</h1>
                    <article>
                        <p>{$blogPost->getContent()}</p>
                        <p>{$blogPost->getAuthor()}</p>
                    </article>
                </article>";
    }
}
