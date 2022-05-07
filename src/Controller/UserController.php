<?php

namespace App\Controller;

use App\Form\EditUserType;
use App\Form\EditPasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController'


        ]);
    }

    /**
     * @Route("user/profil/edit", name="user_profil_edit")
     */
    public function edit(Request $request): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(EditUserType::class, $this->getUser());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->addFlash('success', 'Profil modifié avec succès !');
            return $this->redirectToRoute('user');
        }


        return $this->render('user/edit.html.twig', [
            'controller_name' => 'UserController',
            'form' => $form->createView(),


        ]);
    }

    /**
     * @Route("user/password/edit", name="user_password_edit")
     */
    public function editPassword(Request $request, UserPasswordHasherInterface $hasher): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(EditPasswordType::class, $this->getUser());
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($hasher->hashPassword($user, $form->get('password')->getData()));
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();


            $this->addFlash('success', 'Mot de passe modifié avec succès !');
            return $this->redirectToRoute('user');
        }


        return $this->render('user/editPassword.html.twig', [
            'controller_name' => 'UserController',
            'form' => $form->createView(),


        ]);
    }
}
