<?php

namespace App\Controller\Admin;

use App\Entity\Achievement;
use App\Entity\Degree;
use App\Entity\Illustration;
use App\Entity\Presentation;
use App\Entity\ProjectCategory;
use App\Entity\Skill;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        //return parent::index();
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle(' Lancelle Clara <span class="text-small">Portfolio</span>')
            ->setFaviconPath('images/logo.png');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('Website ', 'fa fa-eye', 'app_index');
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Users', 'fas fa-list', User::class);
        yield MenuItem::linkToCrud('Presentation', 'fas fa-list', Presentation::class);
        yield MenuItem::linkToCrud('Skills', 'fas fa-list', Skill::class);
        yield MenuItem::linkToCrud('Degrees', 'fas fa-list', Degree::class);
        yield MenuItem::linkToCrud('Achievements', 'fas fa-list', Achievement::class);
        yield MenuItem::linkToCrud('Illustrations', 'fas fa-list', Illustration::class);
        yield MenuItem::linkToCrud('ProjectCategory', 'fas fa-list', ProjectCategory::class);
    }
}
