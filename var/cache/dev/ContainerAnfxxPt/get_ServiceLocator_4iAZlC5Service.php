<?php

namespace ContainerAnfxxPt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4iAZlC5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4iAZlC5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4iAZlC5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'offreRepository' => ['privates', 'App\\Repository\\OffreRepository', 'getOffreRepositoryService', true],
        ], [
            'normalizer' => '?',
            'offreRepository' => 'App\\Repository\\OffreRepository',
        ]);
    }
}
