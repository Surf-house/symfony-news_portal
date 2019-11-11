<?php

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
