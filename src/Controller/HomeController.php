<?php

namespace App\Controller;

use App\Repository\TagRepository;
use App\Repository\PostsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    
    public function index(PostsRepository $postsRepository, TagRepository $tagRepository): Response
    {   
   
     $posts = $postsRepository->findByExampleField($value = 6);
     $tag = $tagRepository->findAll();
     $postsPhp = $postsRepository->findByPostPHp($value = 5,$values = 'php');
        return $this->render('home/index.html.twig', [
            'posts' => $posts,
            'tag' => $tag,
            'postsphp' => $postsPhp,

            
        ]);
    }
}
