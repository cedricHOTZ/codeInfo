<?php

namespace ContainerJpvmlBG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostsCrudControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\Admin\PostsCrudController' shared autowired service.
     *
     * @return \App\Controller\Admin\PostsCrudController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\Admin\\PostsCrudController'] = $instance = new \App\Controller\Admin\PostsCrudController(($container->privates['session.flash_bag'] ?? $container->load('getSession_FlashBagService')));

        $instance->setContainer(($container->privates['.service_locator.ipvtXDO'] ?? $container->load('get_ServiceLocator_IpvtXDOService'))->withContext('App\\Controller\\Admin\\PostsCrudController', $container));

        return $instance;
    }
}
