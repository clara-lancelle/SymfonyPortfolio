<?php

namespace App\Controller\Admin;

use App\Entity\Degree;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class DegreeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Degree::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            ImageField::new('image')
                ->setBasePath('uploads/degrees')
                ->setUploadDir('public/uploads/degrees')
                ->setRequired($pageName != 'edit'),
        ];
    }

}
