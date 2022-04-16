<?php

namespace App\Controller;

use App\Entity\Tag;
use App\Entity\Posts;
use App\Repository\TagRepository;
use App\Repository\PostsRepository;
use Doctrine\ORM\EntityManagerInterface;
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
     * @Route("/", name="home")
     */

    public function index(PostsRepository $postsRepository,TagRepository $tagRepository):Response
     {
    
     // Récupère tout les tags
     $listTag = $tagRepository->findAll();
     // Affiche les post par une catégorie passée en paramètre
     $listPost = $postsRepository->findByPostPHp('php');
     // Affiche tout les posts
     $posts = $postsRepository->findByExampleField($value = 6);
    
        return $this->render('home/index.html.twig', [
            'posts' => $posts,
            'tag' => $listTag,
           'listPost' => $listPost,
           
        ]);
       
    }

  
}
