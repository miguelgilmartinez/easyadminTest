<?php

namespace App\Controller\Admin\Father;

use App\Entity\Father;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;

class FatherCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Father::class;
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Father');
    }


    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
