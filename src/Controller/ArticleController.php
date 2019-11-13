<?php

declare(strict_types = 1);

/*
 * This file is part of the "PHP symfony-news_portal" project.
 *
 * (c) Alexander Singaevskiy <myphp.alexander@gmail.com>
 *
 */

namespace App\Controller;


use App\Article\ArticlePresentationInterface;
use App\Exception\EntityNotFoundException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class ArticleController extends AbstractController
{
    /**
     * Render single Article.
     */
    public function show(int $id, ArticlePresentationInterface $presentationService): Response
    {
        try {
            $article = $presentationService::findOne($id);
        } catch (EntityNotFoundException $e) {
            throw new EntityNotFoundException('Article does not exist.');
        }

        return $this->render('article/show.html.twig', ['article' => $article]);
    }
}
