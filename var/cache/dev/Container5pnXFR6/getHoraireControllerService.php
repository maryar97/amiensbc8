<?php

namespace Container5pnXFR6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHoraireControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HoraireController' shared autowired service.
     *
     * @return \App\Controller\HoraireController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/HoraireController.php';

        $container->services['App\\Controller\\HoraireController'] = $instance = new \App\Controller\HoraireController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\HoraireController', $container));

        return $instance;
    }
}
