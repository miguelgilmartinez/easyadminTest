<?php

namespace App\Controller\Admin\Son;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SonDashboardController extends AbstractDashboardController
{
    /**
     * @Route("/son", name="son")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(CrudUrlGenerator::class)->build();
        return $this->redirect($routeBuilder->setController(SonCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('EasyadminTest');
    }

    public function configureMenuItems(): iterable
    {
            yield MenuItem::linktoRoute('Father:linktoRoute', 'fa fa-users', 'father');
            yield MenuItem::linkToCrud('Father:linkToCrud', 'fa fa-users', \App\Entity\Father::class);
    }
}
