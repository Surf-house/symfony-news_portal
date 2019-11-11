<?php

declare(strict_types=1);

namespace App\Controller;

use App\Article\ArticlePageInterface;
use App\Article\ArticlePresentationInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

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
$factory  = \phpDocumentor\Reflection\DocBlockFactory::createInstance();

$docComment = <<<DOCCOMMENT
/**
 * This is an example of a summary.
 *
 * This is a Description. A Summary and Description are separated by either
 * two subsequent newlines (thus a whiteline in between as can be seen in this
 * example), or when the Summary ends with a dot (`.`) and some form of
 * whitespace.
 */
DOCCOMMENT;

$docblock = $factory->create($docComment);