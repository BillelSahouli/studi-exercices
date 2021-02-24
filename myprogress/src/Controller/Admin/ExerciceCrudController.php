<?php

namespace App\Controller\Admin;

use App\Entity\Exercice;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ExerciceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Exercice::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name'),
            SlugField::new('slug')->setTargetFieldName('name'),
            ImageField::new('illustration')
                ->setBasePath('uploads/')
                ->setUploadDir('public/uploads/')
                ->setUploadedFileNamePattern('[randomhash],[extension]')
                ->setRequired(false),
            TextField::new('subtitle'),
            TextareaField::new('description'),
            AssociationField::new('muscle')
        ];
    }

}
