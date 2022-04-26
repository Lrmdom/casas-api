<?php

namespace App\Controller\Admin;

use App\Entity\Preco;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PrecoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Preco::class;
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
