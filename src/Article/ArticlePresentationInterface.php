<?php

declare(strict_types=1);

namespace App\Article;

use App\Collection\ArticleCollection;

interface ArticlePresentationInterface
{
    public function getLatest(): ArticleCollection;
}
