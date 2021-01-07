<?php

namespace App\Controller\Admin\Father;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;

class FatherDashboardController extends AbstractDashboardController
{
    /**
     * @Route("/father", name="father")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();
        return $this->redirect($routeBuilder->setController(FatherCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('EasyadminTest');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoRoute('Son:linktoRoute', 'fa fa-user', 'son');
        yield MenuItem::linkToCrud('Son:linkToCrud', 'fa fa-user', \App\Entity\Son::class);

    }
}
