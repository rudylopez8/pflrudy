<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="/home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
        ]);
    }

        /**
     * @Route("/apropos", name="app_apropos")
     */

    public function apropos(): Response
    {
        return $this->render('home/apropos.html.twig', [
        ]);
    }


        /**
     * @Route("/mesSite", name="app_mesSite")
     */

     public function mesSite(): Response
     {
         return $this->render('home/mesSite.html.twig', [
         ]);
     }

        /**
     * @Route("/monCv", name="app_monCv")
     */

     public function mesCv(): Response
     {
         return $this->render('home/monCv.html.twig', [
         ]);
     }

}
