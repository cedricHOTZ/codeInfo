<?php

namespace App\Controller;

use PDO;
use App\Entity\Tag;
use App\Entity\Posts;
use App\Form\ContactType;
use App\Form\PartagePostType;
use Symfony\Component\Form\Form;
use App\Repository\TagRepository;
use App\Repository\PostsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;

        
    }
    
    /**
     * @Route("", name="home")
     */

    public function index(PostsRepository $postsRepository,TagRepository $tagRepository, Request $request ):Response
     {
    
        $submittedToken = $request->request->get('token');
     $listTag = $tagRepository->findAll();
     
     $listPost = $postsRepository->findByPostPHp('php');
     $postflutter = $postsRepository->findByPostFlutter('flutter');
     $postPertinent = $postsRepository->findBy(['id' => [1,2]]);
     $csrf = $this->container->get('security.csrf.token_manager');
     $token = $csrf->refreshToken('yourkey');
     $posts = $postsRepository->findByExampleField($value = 6);
     $partage = New Posts();
     $form = $this->createForm(PartagePostType::class);
     $form->handleRequest($request);
     if ($form->isSubmitted() && $form->isValid()) {
        if ($this->isCsrfTokenValid('delete-item', $submittedToken)) {
             $partage = $form->getData();
            $this->entityManager->persist($partage);
            $this->entityManager->flush();
            $this->addFlash('success', 'Votre post a bien été partagé');
         $this->redirect('home');
        }
    }
        return $this->render('home/index.html.twig', [
            'posts' => $posts,
            'tag' => $listTag,
           'listPost' => $listPost,
              'postflutter' => $postflutter,
           'postPertinent' => $postPertinent,
            'form' => $form->createView(),
           
        ]);
       
    }
 /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request):Response{
      $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();
            $this->addFlash('success', 'Votre message a bien été envoyé');
            return $this->redirectToRoute('home');
        }

        return $this->render('home/contact.html.twig',
            [
                'form' => $form->createView(),
            ]
            );
    }



    /**
     * @Route("/mentions-légales", name="mentions")
     */
    public function mentions(Request $request):Response{
        
  
          return $this->render('home/mentions.html.twig');
      }
  

  
}
