<?php

namespace Pyz\Yves\Collector\Creator;

use Silex\Application;
use Spryker\Shared\Application\Communication\ControllerServiceBuilder;
use Spryker\Shared\Kernel\Communication\BundleControllerActionInterface;
use Spryker\Yves\Kernel\ClassResolver\Controller\ControllerResolver;
use Spryker\Yves\Kernel\Controller\BundleControllerActionRouteNameResolver;

abstract class AbstractResourceCreator implements ResourceCreatorInterface
{

    /**
     * @param \Silex\Application $application
     * @param \Spryker\Shared\Kernel\Communication\BundleControllerActionInterface $bundleControllerAction
     * @param \Spryker\Yves\Kernel\Controller\BundleControllerActionRouteNameResolver $routeNameResolver
     *
     * @return string
     */
    protected function createServiceForController(
        Application $application,
        BundleControllerActionInterface $bundleControllerAction,
        BundleControllerActionRouteNameResolver $routeNameResolver
    ) {
        $controllerResolver = new ControllerResolver($bundleControllerAction);
        $service = (new ControllerServiceBuilder())->createServiceForController(
            $application,
            $bundleControllerAction,
            $controllerResolver,
            $routeNameResolver
        );

        return $service;
    }

}
