<?php

namespace App\Form;

use COM;
use App\Entity\Tag;
use App\Entity\Posts;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vich\UploaderBundle\Form\Type\VichImageType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use VictorPrdh\RecaptchaBundle\Form\ReCaptchaType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

class PartagePostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('pseudo',TextType::class,[
                'label' => 'Pseudo',
                'attr' => [
                    'placeholder' => 'Pseudo',
                    'class' => 'form-control'
                ],]
                )
            ->add('email', EmailType::class,[
                'label' => 'Email',
                'attr' => [
                    'placeholder' => 'Email',
                    'class' => 'form-control'
                    ],])

            ->add('titre', TextType::class,[
                'label' => 'titre',
                'attr' => [
                    'placeholder' => 'Titre',
                    'class' => 'form-control'
                    ],])

            ->add('description',TextareaType::class,[
                'label' => 'Description',
                'attr' => [
                    'placeholder' => 'Description',
                    'class' => 'form-control'
                    ],])
                  

                    ->add('tags', EntityType::class,[
                        'class' => Tag::class,
                        'label' => 'Tag',
                        'required' => false,
                        'placeholder' => 'Choisissez un tag',
                        'multiple' => true,
                        'attr'=> [
                            'class' => 'form-control'
                        ]
                       
                    ])

                    

            ->add('url', TextType::class,[
                'label' => 'Url',
                'attr' => [
                    'placeholder' => 'Url',
                    'class' => 'form-control'
                    ],])

            ->add('imageFile',VichImageType::class,[
                'label' => 'Image',
                'required' => false,
               
                'download_label' => 'Télécharger',
                
                'attr' => [
                    'class' => 'form-control'
                    ],]) 
            ->add('captcha', ReCaptchaType::class,[
                  'label' => 'Captcha',
                 'attr' => [
                 'class' => 'form-control'
                          ],])
        
           ->add('Valider', SubmitType::class,[
                   'label' => 'Partager', 
                   'attr' => [
                   'class' => 'btn btn-primary mt-3 justify-content-md-end'
                        ]])
                
         
        
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Posts::class,
        ]);
    }
}
