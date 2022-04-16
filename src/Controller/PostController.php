<?php

namespace App\Controller;

use App\Entity\Tag;
use App\Entity\Posts;
use App\Repository\TagRepository;
use App\Repository\PostsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PostController extends AbstractController
{
    /**
     * @Route("/post", name="post")
     */
    public function index(?Posts $posts, PostsRepository $postsRepository, TagRepository  $tagRepository): Response
    {
        $em = $this->getDoctrine()->getManager();
   $tags =  $tagRepository->findAll();
    $posts = $postsRepository->findAll();
    
        return $this->render('post/index.html.twig', [
            'controller_name' => 'PostController',
            'posts' => $posts,

            
          
        ]);
    }

    /**
     * @Route("/post/{slug}", name="post_show")
     */
    public function show(?Posts $posts,PostsRepository $postsRepository): Response
    {
        
        if (!$posts) {
            return $this->redirectToRoute('home');
        }
        
        return $this->render('post/show.html.twig', [
            'controller_name' => 'PostController',
            'posts' => $posts,
        ]);
    }
}
