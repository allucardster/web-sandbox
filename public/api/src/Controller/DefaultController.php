<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return new Response('<html><body><h1>Hello World ( ･ω･)ﾉ</h1></body></html>', Response::HTTP_OK);
    }

    /**
     * @Route("/{all}", requirements={"all": "^(?!api).+"})
     */
    public function allAction()
    {
        return $this->redirectToRoute('app_default_index');
    }
}