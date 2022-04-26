<?php

namespace App\Controller\Admin;

use App\Entity\Tipo;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TipoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Tipo::class;
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
