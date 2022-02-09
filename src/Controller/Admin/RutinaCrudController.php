<?php

namespace App\Controller\Admin;

use App\Entity\Rutina;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;
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
            yield AssociationField::new('Canal'),
            yield AssociationField::new('Cliente'),
            yield FormField::addRow(),

            yield DateField::new('fechaInicio')
            ->setColumns(4),
            yield DateField::new('fechaFin')
            ->setColumns(4),
            yield FormField::addRow(),

            yield TimeField::new('horaInicio')
            ->setColumns(4)
            ->setFormTypeOption('mapped',false),
            yield TimeField::new('horaFin')
            ->setColumns(4)            
            ->setFormTypeOption('mapped',false),
            yield FormField::addRow(),

            yield ChoiceField::new('dias')
            ->setFormTypeOption('mapped',false)
            ->setChoices(array_combine($dias,$dias))
            ->allowMultipleChoices()
            ->renderExpanded()
        ];
    }
    
}
