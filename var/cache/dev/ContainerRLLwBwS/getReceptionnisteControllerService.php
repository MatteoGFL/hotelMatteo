<?php

namespace ContainerRLLwBwS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getReceptionnisteControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ReceptionnisteController' shared autowired service.
     *
     * @return \App\Controller\ReceptionnisteController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ReceptionnisteController.php';

        $container->services['App\\Controller\\ReceptionnisteController'] = $instance = new \App\Controller\ReceptionnisteController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ReceptionnisteController', $container));

        return $instance;
    }
}
