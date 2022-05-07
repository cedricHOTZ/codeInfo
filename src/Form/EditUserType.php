<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class EditUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
    
           
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'required' => true,
                'attr' => [
                    'class' => 'form-control w-50',
                    'placeholder' =>''
                ]
            ])
            ->add('prenom',TextType::class, [
                'label' => 'Prénom',    
                'required' => true,
                'attr' => [
                    'class' => 'form-control w-50',
                    'placeholder' =>''
                ]
            ])
            ->add('valider', SubmitType::class,[
                'attr' => [
                    'class' => 'btn btn-primary mt-3 '
                ]])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
