<?php

namespace App\Solid\SingleResponsibility\EX2;

use App\Solid\SingleResponsibility\EX2\BlogPost;
use App\Solid\SingleResponsibility\EX2\PrintableBlogPost;

class JsonBlogPostPrinter implements PrintableBlogPost
{
    public function print(BlogPost $blogPost)
    {
        return json_encode($blogPost->getData());
    }
}