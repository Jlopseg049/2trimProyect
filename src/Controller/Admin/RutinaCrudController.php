<?php

namespace App\Controller\Admin;

use App\Entity\Rutina;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class RutinaCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Rutina::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        $dias=['L', 'M', 'M', 'J', 'V', 'S', 'D'];
        return [
            yield AssociationField::new('Cliente'),
            yield DateTimeField::new('fechaInicio'),
            yield DateTimeField::new('fechaFin'),
            yield ChoiceField::new('dias')
            ->setChoices(array_combine($dias,$dias))
            ->allowMultipleChoices()
            ->renderExpanded()
        ];
    }
    
}
