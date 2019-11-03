<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
class ArticleController
{

    public function showarticle()
    {
        return new Response('Hello there');
    }
}