<?php

namespace App\Controller;

use App\Form\PartagePostType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FormController extends AbstractController
{
    public static function newContactForm(Request $request, $route, $instance)
    {
        $contactRequest = new ContactRequest();
        $partage = New Posts();
        $form = $instance->createForm(PartagePostType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
                
               $instance->entityManager->persist($partage);
               $instance->entityManager->flush();
               $instance->addFlash('success', 'Votre post a bien été partagé');
             
           }
       
             
            else{
                $instance->addFlash('danger', "Votre demande n'a pas été prise en compte car elle comporte une ou plusieurs erreur(s). Veuillez réessayer.");
                return $instance->render($route.".html.twig", array(
                    'form' => $form->createView(),
                    'tempValidationForm' => true
                ));
            }
        
 
        return $instance->render($route.".html.twig", array(
            'form' => $form->createView()
        ));
    }

    public function form(Request $request){
        return ContactFormController::newContactForm($request, 'home', $this);
     }
}
