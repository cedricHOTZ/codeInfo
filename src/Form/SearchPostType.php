<?php

namespace App\Form;

use App\Entity\Tag;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SearchPostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('mots', SearchType::class,[
                'label' => false,
                'required' => false,
                'attr' => [
                    'class' => 'form-control w-50',
                    'placeholder' =>'Entrez un ou plusieurs mots-clés'
                ]
            ])
            ->add('tags', EntityType::class,[
                'class' => Tag::class,
                'label' => false,
                'required' => false,
                'placeholder' => 'Choisissez un tag',
                'attr'=> [
                    'class' => 'form-control w-50'
                ]
               
            ])
            ->add('Rechercher', SubmitType::class,[
                'attr' => [
                    'class' => 'btn btn-primary'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
