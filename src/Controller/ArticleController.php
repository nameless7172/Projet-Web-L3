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
     * @Route ("/page1")
     */
    public function show1()
    {
        $pagename = 'page1';
        $comments=[
            'Theo nous carry en BDD',
            'random comment',
            'BOnjour2',
        ];
        return $this->render('article/show.html.twig',[
            'title'=> $pagename,
            'comments' => $comments,
            ]
        );
    }



    /**
     * @Route ("/page2")
     */
    public function show2()
    {
        $pagename = 'page2';
        $comments=[
            'Template pour DZIDZI2',
            'fais ton CSS stp',
            'BOnjour2',
        ];
        return $this->render('article/show2.html.twig',[
                'title'=> $pagename,
                'comments' => $comments,
            ]
        );
    }



    /**
     * @Route ("/page3")
     */
    public function show3()
    {
        $pagename = 'page3';
        $comments=[
            'je ferai master info',
            'bonjour1',
            'BOnjour2',
        ];
        return $this->render('article/show3.html.twig',[
                'title'=> $pagename,
                'comments' => $comments,
            ]
        );
    }

}