<?php

declare(strict_types=1);

namespace App\Article;

use App\Model\Article;

interface ArticlePageInterface
{
    public function getArticle(int $id): Article;
}
