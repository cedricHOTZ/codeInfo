<?php

namespace App\Controller\Admin;

use App\Entity\Tag;
use App\Entity\User;
use App\Entity\Posts;
use App\Repository\TagRepository;
use App\Repository\UserRepository;
use App\Repository\PostsRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use Symfony\Component\Security\Core\User\UserInterface;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

class DashboardController extends AbstractDashboardController
{
        protected PostsRepository $postsRepository;
        protected TagRepository $tagRepository;
        protected UserRepository $userRepository;
    

    public function __construct(
        PostsRepository $postsRepository, TagRepository $tagRepository, UserRepository $userRepository
    ) {
        $this->postsRepository = $postsRepository;
         $this->tagRepository = $tagRepository;
            $this->userRepository = $userRepository;
       
    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
    /**
     * @Route("/admin", name="admin")
     
     */
    public function index(): Response
    {
        return $this->render('bundles/EasyAdminBundle/welcome.html.twig',[
            'countPost' => $this->postsRepository->countPost(),
            'countTag' => $this->tagRepository->countTag(),
            'countUser' => $this->userRepository->countUser(),
           
        ]);
    
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Code Info')
            ->setFaviconPath('')
            ->setTextDirection('ltr');
    }

    /* Pour modifier le style du  Dashboard */
    public function configureAssets(): Assets
    {
        return Assets::new()
            ->addCssFile('bundles/easyadmin/css/style.css');
          
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        
        yield MenuItem::section('Posts');
        // yield MenuItem::linkToCrud('Post', 'fas fa-list', Posts::class);
        // Posts
        yield MenuItem::subMenu('Post', 'fas fa-bars')->setSubItems([
              MenuItem::linkToCrud('Ajouter un post', 'fas fa-plus', Posts::class)->setAction(Crud::PAGE_NEW),
              MenuItem::linkToCrud('Afficher les posts', 'fas fa-eye', Posts::class)
        ]);
        // Tags
        yield MenuItem::section('Tags');
        yield MenuItem::subMenu('Tags', 'fas fa-tag')->setSubItems([
              MenuItem::linkToCrud('Ajouter un tag', 'fas fa-plus', Tag::class)->setAction(Crud::PAGE_NEW),
              MenuItem::linkToCrud('Afficher les tags', 'fas fa-eye', Tag::class)
            ]);
      //  yield MenuItem::linkToCrud('Tag', "fas fa-tag", Tag::class);
        yield MenuItem::section('Users');
        yield MenuItem::subMenu('Users', 'fas fa-user')->setSubItems([
        MenuItem::linkToCrud('Ajouter un utilisateur', 'fas fa-plus', User::class)->setAction(Crud::PAGE_NEW),
        MenuItem::linkToCrud('Afficher les utilisateurs', 'fas fa-eye', User::class)
  ]);
    }

    public function configureUserMenu(UserInterface $user): UserMenu
    {
        return parent::configureUserMenu($user)
            ->setAvatarUrl("https://api.adorable.io/avatars/285/{$user->getUsername()}.png")
            ->setName($user->getUsername())
            ->displayUserAvatar(true)
            ->setGravatarEmail($user->getUsername())

            ;

    }
    
 
}
