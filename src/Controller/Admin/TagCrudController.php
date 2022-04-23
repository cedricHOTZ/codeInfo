<?php

namespace App\Controller\Admin;

use App\Entity\Tag;
use PHPUnit\Util\Color;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ColorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class TagCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Tag::class;
    }

    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
       
        parent::updateEntity($entityManager, $entityInstance);
        $this->messageService->add('info', 'Le tag est modifié !');
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('nom'),
            SlugField::new('slug')->setLabel('Slug')->setTargetFieldName('nom'),
            ColorField::new('couleur')->setLabel('Couleur'),
           
        ];
    }

        /* Ajout de la barre de filtre */
        public function configureFilters(Filters $filters): Filters{
            return $filters->add('nom');
        }
    
        public function configureCrud(Crud $crud):Crud{
            return $crud->setDefaultSort(['id' => 'DESC']);
        }
        
        
        public function configureActions(Actions $actions): Actions{
            return $actions
            ->add(Crud::PAGE_INDEX,Action::DETAIL)
            ->update(Crud::PAGE_INDEX,Action::NEW,function(Action $action){
                return $action->setIcon('fa fa-plus')->addCssClass('btn btn-success');
            })
            ->update(Crud::PAGE_INDEX,Action::EDIT,function(Action $action){
                return $action->setIcon('fa fa-edit')->addCssClass('btn btn-warning');
            })
            ->update(Crud::PAGE_INDEX,Action::DETAIL,function(Action $action){
                return $action->setIcon('fa fa-eye')->addCssClass('btn btn-info');
            })
            ->update(Crud::PAGE_INDEX,Action::DELETE,function(Action $action){
                return $action->setIcon('fa fa-trash')->addCssClass('btn btn-danger');
            });
            
        }
    
}
