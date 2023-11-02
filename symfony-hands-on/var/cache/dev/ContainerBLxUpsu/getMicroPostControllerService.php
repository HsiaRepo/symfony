<?php

namespace ContainerBLxUpsu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMicroPostControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MicroPostController' shared autowired service.
     *
     * @return \App\Controller\MicroPostController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/MicroPostController.php';

        $container->services['App\\Controller\\MicroPostController'] = $instance = new \App\Controller\MicroPostController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\MicroPostController', $container));

        return $instance;
    }
}
