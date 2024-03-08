<?php

namespace App\Controller\Admin;

use App\Entity\Achievement;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AchievementCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Achievement::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            'title',
            'start_date',
            'end_date',
            TextEditorField::new('text'),
            'link',
            AssociationField::new('category'),
            AssociationField::new('illustrations')->setFormTypeOption('choice_label', 'name'),
            DateTimeField::new('created_at')->setDisabled($pageName != 'edit' || $pageName != 'create'),
            DateTimeField::new('updated_at')->setDisabled($pageName != 'edit' || $pageName != 'create')

        ];
    }

}
