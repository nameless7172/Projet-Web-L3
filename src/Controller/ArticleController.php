<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{

    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('OMG wooho!');
    }


    /**
     * @Route ("/news/{slug}")
     */
    public function show($slug)
    {
        return $this->render('article/show.html.twig',[
            'title'=> ucwords(str_ireplace('-', ' ', $slug)),
            'title2' => 'mika here',
            ]
        );
    }

}