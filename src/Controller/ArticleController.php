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
        $pagename = 'Tournois DMT';
        return $this->render('article/homepage.html.twig',[
            'title'=> $pagename,
        ]
    );
    }


    /**
     * @Route ("/tournois")
     */
    public function show1()
    {
        $pagename = 'Tournois';
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
     * @Route ("/contact")
     */
    public function show2()
    {
        $pagename = 'Contact';
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
     * @Route ("/admin")
     */
    public function show3()
    {
        $pagename = 'Admin';
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