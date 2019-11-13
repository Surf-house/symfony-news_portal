<?php

declare(strict_types=1);

/*
 * This file is part of the "PHP symfony-news_portal" project.
 *
 * (c) Alexander Singaevskiy <myphp.alexander@gmail.com>
 *
 */

namespace App\Collection;

use App\Model\Article;

/**
 * ArticleCollection checking $articles if it not exist will throw exception.
 *
 * @author Alexander Singaevskiy <myphp.alexander@gmail.com>
 */

final class ArticleCollection implements \IteratorAggregate
{
    public $articles;

    public function __construct(Article $articles)
    {
        $this->articles = $articles;
    }

    public function shift(): Article
    {
        $article = \array_shift($this->articles);

        if (null === $article) {
            throw new \RuntimeException('Articles are not exist');
        }

        return $article;
    }

    public function slice(int $number): iterable
    {
        for ($i = 0; $i < $number; ++$i) {
            yield $this->shift();
        }
    }

    public function getIterator(): is_iterable
    {
        return new \ArrayIterator($this->articles);
    }
}
