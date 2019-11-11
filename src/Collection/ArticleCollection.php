<?php

declare(strict_types=1);

namespace App\Collection;

use App\Model\Article;

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
