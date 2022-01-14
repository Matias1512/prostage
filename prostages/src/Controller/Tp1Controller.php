<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\StageRepository;
use App\Entity\Stage;

class Tp1Controller extends AbstractController
{
    /**
     * @Route("/", name="tp1")
     */
    public function index(): Response
    {
        $repositoryStages = $this->getDoctrine()->getRepository(Stage::class);
        $listeStage = $repositoryStages->findAll();

        return $this->render('tp1/index.html.twig', [
            'listeStage' => $listeStage
        ]);
    }
 }
?>