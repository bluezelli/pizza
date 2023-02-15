<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
class LuckyController extends AbstractController
{
    public function number(int $max): Response
    {
        $number = random_int(0, $max);

        return $this->render('bezoeker/number.html.twig', ['number'=> $number]);
//
        return new Response(

        );

    }
    #[Route('/Home')]
    public function goedemorgen(): Response
    {
        $goedenmorgen = 'goedemorgen';
        return $this->render('bezoeker/vorrbeeld.html.twig', ['goedenmorgen' => $goedenmorgen]);

//        return new Response(
//
//        );

    }



}