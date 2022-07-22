<?php

namespace App\Controller\Admin;

use PDO;
use App\Entity\User;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\EntityManagerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\PasswordField;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

/**
 * @method User getUser()
 */
class UserCrudController extends AbstractCrudController
{

   
    // private $entityRepository;

    // public function __construct(EntityRepository $entityRepository)
    //  {
    //         $this->entityRepository = $entityRepository;
       
    //  }

    public static function getEntityFqcn(): string
    {
        return User::class;

    }

    //  public function createIndexQueryBuilder(SearchDto $searchDto, EntityDto $entityDto, FieldCollection $fields, FilterCollection $filters): QueryBuilder
    //  {
        
    //      $userId = $this->getUser()->getId();
    //      $qb = $this->entityRepository->createQueryBuilder($searchDto, $entityDto, $fields, $filters);
    //      $qb->andWhere('entity.id != :userId')->setParameter('userId', $userId);
    //      return $qb;
    //  }
    
    public function configureFields(string $pageName): iterable
    {
        return [
           
            TextField::new('nom'),
            TextField::new('prenom'),
            ChoiceField::new('roles')
            ->allowMultipleChoices()
            
            ->renderAsBadges([
                'ROLE_ADMIN' => 'success',
                'ROLE_USER' => 'info',
              

                ])
            
                ->setChoices([
                'Administrateur' => 'ROLE_ADMIN',
                'Auteur' => 'ROLE_USER',
                
                ])
                ->setHelp('Veuillez choisir un role')
                ->setRequired(true) 
                ->setLabel('Rôle'),

            TextField::new('email'),
            TextField::new('password')
            ->setFormType(PasswordType::class)
            ->onlyOnForms(),
        ];
    }
    // /* hash le mot de passe avant de l'envoyer en BDD */
    // public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void{
       
    //     /**
    //      * @var User $user
    //      */
    //      $user = $entityInstance;
    //          $plainPassword = $user->getPassword();
    //          $hashedPassword = $this->passwordHasher->hashPassword($user, $plainPassword);
           
    //         $user->setPassword($hashedPassword);
    //        parent::persistEntity($entityManager, $entityInstance);

    // }

    public function configureFilters(Filters $filters): Filters{
        return $filters->add('nom')->add('prenom')->add('email');
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
            return $action->setIcon('fa fa-trash')->addCssClass('btn btn-dark');
        });
        
    }
    
    
}
