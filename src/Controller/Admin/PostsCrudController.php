<?php

namespace App\Controller\Admin;

use App\Entity\Posts;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PostsCrudController extends AbstractCrudController
{
    
    public static function getEntityFqcn(): string
    {
        return Posts::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        date_default_timezone_set('Europe/Paris');
        return [
           
            TextField::new('titre'),
            TextField::new('description'),
            AssociationField::new('tags'),
            TextField::new('url'),
            DateField::new('date')->hideOnForm()->setLabel('Date de création')->setFormat('dd-MM-y HH:mm:ss'),
            TextField::new('imageFile')->setFormType(VichImageType::class)->onlyWhenCreating(), 
            ImageField::new('image')->setBasePath('/images/posts/')->onlyOnIndex()->setUpLoadDir('public/images/posts/')->setLabel('Image'),
           
        ];
    }
    
}
