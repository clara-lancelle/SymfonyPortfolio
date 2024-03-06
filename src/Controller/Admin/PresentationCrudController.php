<?php

namespace App\Controller\Admin;

use App\Entity\Presentation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Form\Type\FileUploadType;

class PresentationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Presentation::class;
    }


    public function configureFields(string $pageName): iterable
    {
        // return [
        //     IdField::new('id'),
        //     TextField::new('title'),
        //     TextEditorField::new('description'),
        // ];
        return [
            TextField::new('text'),
            TextField::new('cv')
                ->setFormType(FileUploadType::class)
                ->setFormTypeOptions(['upload_dir' => 'public/uploads/presentation'])
                ->setCustomOption('basePath', 'uploads/presentation')
                ->setCustomOption('uploadDir', 'public/uploads/presentation')
                ->setRequired($pageName != 'edit'),
            ImageField::new('image')
                ->setBasePath('uploads/presentation')
                ->setUploadDir('public/uploads/presentation')
                ->setRequired($pageName != 'edit'),
        ];
    }

}
