<?php

declare(strict_types=1);

/*
 * This file is part of the "PHP symfony-news_portal" project.
 *
 * (c) Alexander Singaevskiy <myphp.alexander@gmail.com>
 *
 */

namespace App\Controller;

use App\Article\ArticlePageInterface;
use App\Article\ArticlePresentationInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

/**
 * DefaultController make render for pages.html.twig
 *
 * @author Alexander Singaevskiy <myphp.alexander@gmail.com>
 */

final class DefaultController extends AbstractController
{
    public function index(ArticlePresentationInterface $articlePresentation): Response
    {
        $articles = $articlePresentation->getLatest();

        return $this->render('default/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    public function article(int $id, ArticlePageInterface $articlePage): Response
    {
        $article = $articlePage->getArticle($id);

        return $this->render('default/article.html.twig', [
            'article' => $article,
        ]);
    }

    
}
