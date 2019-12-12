<?php
// src/Controller/AdvertController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;


class AdvertController
{
    /**
     * @Route("hello-stev", name="Hai_Me")
     */
    public function index(Environment $twis)
    {

        $content = $twis->render('Advert/index.html.twig',['name' => 'winzou']);
        return new Response($content);
    }


}