<?php

namespace App\Controller;

use App\Repository\PresentationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(PresentationRepository $presentationRepository): Response
    {

        return $this->render('index.html.twig', [
            'presentation' => $presentationRepository->getPresentation(),
        ]);
    }
}
