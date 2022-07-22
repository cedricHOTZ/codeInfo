<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'Votre nom',
                    'class' => 'form-control w-50'
                
                ],
                ])
            ->add('prenom', TextType::class, [
                'label' => 'Prénom',
                'attr' => [
                    'placeholder' => 'Votre prénom',
                    'class' => 'form-control w-50'
                    ],'required' => false,  
                    ])
            ->add('email', EmailType::class, [  
                'label' => 'Email',
                'attr' => [
                    'placeholder' => 'Votre email',
                    'class' => 'form-control w-50'
                    ],'required' => false,
                    ])
            ->add('objet', ChoiceType::class, [
                'label' => 'Objet',
                'choices' => [
                    'inscription' => 'inscription',
                    'Un article' => 'Un article',
                    'Autre' => 'Autre'
                ],
                'attr' => [
                    'class' => 'form-control w-50'
                ],
                'required' => false,
                ])
            ->add('texte',TextareaType::class, [
                'label' => 'Message',
                'attr' => [
                    'placeholder' => 'Votre message',
                    'class' => 'form-control w-50'
                    ],'required' => false,
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
            'data_class' => Contact::class,
        ]);
    }
}
