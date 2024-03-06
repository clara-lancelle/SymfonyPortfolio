<?php

namespace App\Controller;

use App\Repository\PresentationRepository;
use App\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(PresentationRepository $presentationRepository, SkillRepository $skillRepository): Response
    {

        return $this->render('index.html.twig', [
            'presentation' => $presentationRepository->getPresentation(),
            'skills'       => $skillRepository->findAll(),
        ]);
    }
}
