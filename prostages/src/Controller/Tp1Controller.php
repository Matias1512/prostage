<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Tp1Controller extends AbstractController
{
    /**
     * @Route("/", name="tp1")
     */
    public function index(): Response
    {
        return $this->render('tp1/index.html.twig', [
            'controller_name' => 'Tp1Controller',
        ]);
    }
}
