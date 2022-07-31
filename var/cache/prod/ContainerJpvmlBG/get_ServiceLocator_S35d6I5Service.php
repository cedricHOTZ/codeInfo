<?php

namespace ContainerJpvmlBG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S35d6I5Service extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.s35d6I5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.s35d6I5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'postsRepository' => ['privates', 'App\\Repository\\PostsRepository', 'getPostsRepositoryService', true],
            'tagRepository' => ['privates', 'App\\Repository\\TagRepository', 'getTagRepositoryService', true],
        ], [
            'postsRepository' => 'App\\Repository\\PostsRepository',
            'tagRepository' => 'App\\Repository\\TagRepository',
        ]);
    }
}
