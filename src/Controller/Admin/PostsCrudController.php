<?php

namespace App\Controller\Admin;

use App\Entity\Posts;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\SlugField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PostsCrudController extends AbstractCrudController
{
    protected $messageService;

    public function __construct(FlashBagInterface $messageService){
        $this->messageService = $messageService;
    }
    
    public static function getEntityFqcn(): string
    {
        return Posts::class;
    }

    public function updateEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
       
        parent::updateEntity($entityManager, $entityInstance);
        $this->messageService->add('success', 'Le post est modifié !');
    }
 
    
    public function configureFields(string $pageName): iterable
    {
        date_default_timezone_set('Europe/Paris');
        return [
            IntegerField::new('id')->onlyOnIndex(),
            TextField::new('titre'),
            SlugField::new('slug')->setLabel('Slug')->setTargetFieldName('titre'),
            TextField::new('description'),  
            CollectionField::new('tags')->hideOnForm(),
            AssociationField::new('tags')->setQueryBuilder(function(QueryBuilder $queryBuilder){
                $queryBuilder->where('entity.isActive = true');
            })->onlyWhenCreating(),
        
            UrlField::new('url'),
            DateField::new('date')->hideOnForm()->setLabel('Date de création')->setFormat('dd-MM-y HH:mm:ss'),
            TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenCreating(), 
            ImageField::new('image')->setBasePath('/images/posts/')->onlyOnIndex()->setUpLoadDir('public/images/posts/')->setLabel('Image'),
            BooleanField::new('active')->setLabel('En ligne')->addCssClass('switch-input'),
           
        ];
    }
    /* Ajout de la barre de filtre */
    public function configureFilters(Filters $filters): Filters{
        return $filters->add('tags')->add('titre');
    }

    public function configureCrud(Crud $crud):Crud{
        return $crud->setDefaultSort(['date' => 'DESC']);
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
            return $action->setIcon('fa fa-trash')->addCssClass('btn btn-dark');
        });
        
    }
    
}
