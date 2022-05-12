<?php

namespace App\Controller\Admin;

use App\Entity\Casa;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;

class CasaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Casa::class;
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
    /* public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Casa')
            ->setEntityLabelInPlural('Alojamentos ')
            ->setSearchFields(['tipo', 'designacao', 'propid'])
            ->setDefaultSort(['destino' => 'ASC', 'codCasa'=>'DESC']);
        ;
    } */
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            //->add(BooleanField::new('activo'))
            ->add('proprietario')
            ->add('adicionado')
            ->add('activo');

    }
    //  public function configureFields(string $pageName): iterable
    // {
    #yield AssociationField::new('propid');
    /*  yield TextField::new('tipo');
     yield EmailField::new('proprietario');
     yield TextareaField::new('designacao')
         ->hideOnIndex()
     ;
     yield TextField::new('foto_1')
         ->onlyOnIndex() */
    //;
    /* yield AssociationField::new('propid')
            ->setFormTypeOptions([
                'by_reference' => false,
            ])
    ; */
    //yield AssociationField::new('propid', 'propid');

    /*   $createdAt = DateTimeField::new('createdAt')->setFormTypeOptions([
         'html5' => true,
         'years' => range(date('Y'), date('Y') + 5),
         'widget' => 'single_text',
     ]);
     if (Crud::PAGE_EDIT === $pageName) {
         yield $createdAt->setFormTypeOption('disabled', true);
     } else {
         yield $createdAt;
     }  */
    // }
}