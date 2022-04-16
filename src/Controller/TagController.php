<?php

namespace App\Controller;

use App\Entity\Tag;
use App\Entity\Posts;
use App\Repository\TagRepository;
use App\Repository\PostsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TagController extends AbstractController
{
     /**
     * @Route("/tag", name="tag",methods="GET|POST")
     */
    public function index(TagRepository $tagRepository): Response
    {
       
        return $this->render('tag/index.html.twig', [
            'controller_name' => 'TagController',
            'tag' => $tagRepository->findAll(),

            
            
        ]);
    }
    /**
     * @Route("/tag/{slug}", name="tag_show",methods="GET|POST")
     */
    public function show(?Tag $tag): Response
    {

         if (!$tag) {
            return $this->redirectToRoute('home');
         }
        

       
        return $this->render('tag/show.html.twig', [
            'controller_name' => 'TagController',
            'tag' => $tag,
            
              
        ]);
    }
}
