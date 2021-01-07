<?php

namespace App\Controller\Admin\Son;

use App\Entity\Son;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;

class SonCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Son::class;
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Son');
    }
}
