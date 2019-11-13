<?php

declare(strict_types=1);

/*
 * This file is part of the "PHP symfony-news_portal" project.
 *
 * (c) Alexander Singaevskiy <myphp.alexander@gmail.com>
 *
 */

namespace App\Article;

use App\Collection\ArticleCollection;

/**
 * ArticlePresentationInterface for creating new classes.
 *
 * @author Alexander Singaevskiy <myphp.alexander@gmail.com>
 */

interface ArticlePresentationInterface
{
    public function getLatest(): ArticleCollection;
}
