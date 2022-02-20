<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        $roles = ['ROLE_ADMIN', 'ROLE_USER'];
        return [
            yield ImageField::new('foto')
            ->setBasePath( 'img2/profiler')
                ->setUploadDir('public\img2\profiler')
               ,
            yield EmailField::new('email'),
            yield TextField::new('username'),
            yield TextField::new('password'),
            yield TextField::new('name'),
            yield TextField::new('ap1'),
            yield TextField::new('ap2'),
            yield ChoiceField::new('roles')
            ->setChoices(array_combine($roles, $roles))
            ->allowMultipleChoices()
            ->renderExpanded()

        ];
    }
    
}
