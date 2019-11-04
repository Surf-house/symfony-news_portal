<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Faker\Factory;
use Faker\Provider\DateTime;

class ArticleController extends AbstractController
{

    /**
     * @Route("/article")
     */
    public function showarticle()
    {
        return new Response('Hello there');
    }



    /**
     * @Route("/article/{date}")
     */
    
     public function create($date)
    {    
        $faker = Factory::create();
        

        

        $title = $faker->sentence;

        $text = $faker->text;
        
        $date = $faker->date;

        $category = $faker->jobTitle;

    

        return $this->render('article/show.html.twig', [
            'title'    => $title, 
            
            'text'     => $text,
            'date'     => $date,
            'category' => $category,
        ]);
    }

    
        
    
}