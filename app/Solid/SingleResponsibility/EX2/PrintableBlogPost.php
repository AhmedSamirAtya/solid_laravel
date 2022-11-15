<?php 
namespace App\Solid\SingleResponsibility\EX2;

interface PrintableBlogPost
{
    public function print(BlogPost $blogPost);
}