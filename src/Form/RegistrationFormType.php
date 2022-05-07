<?php

namespace App\Form;

use App\Entity\User;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\TextType as SymfonyTextType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', SymfonyTextType::class, [
            'label' => 'Nom',
            'required' => true,
            'attr' => [
                'class' => 'form-control w-50',
                'placeholder' =>''
            ]
        ])
        ->add('prenom', SymfonyTextType::class, [
            'label' => 'Prénom',    
            'required' => true,
            'attr' => [
                'class' => 'form-control w-50',
                'placeholder' =>''
            ]
        ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'class' => 'form-control w-50',
                    'placeholder' => ''
                ]
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'attr' => [
                    'class' => 'form-check-input ms-2',
                    
                ],
                'constraints' => [
                    new IsTrue([
                        'message' => 'Veuillez accépter les conditions d\'utilisation',
                    ]),
                ],
            ])
            ->add('password', RepeatedType::class, [
                'type' => PasswordType::class,
                
                'invalid_message' => '
                Les champs du mot de passe doivent correspondre.',
                'options' => ['attr' => ['class' => 'password-field form-control w-50 ']],
                'required' => true,
                'first_options'  => ['label' => 'Mot de passe'],
                'second_options' => ['label' => 'Confirmer le mot de passe'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
