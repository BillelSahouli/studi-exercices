<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{

    /**
     * @Route("/index",name="acceuil")
     */
    public function index()
    {
        return new Response('<html><body><h1>Acceuil</h1></body></html>');
    }

}