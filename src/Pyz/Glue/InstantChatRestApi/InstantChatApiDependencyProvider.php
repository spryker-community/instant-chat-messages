<?php

namespace Pyz\Glue\InstantChatRestApi;

use Spryker\Glue\Kernel\AbstractBundleDependencyProvider;
use Spryker\Glue\Kernel\Container;

class InstantChatApiDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * @param \Spryker\Glue\Kernel\Backend\Container $container
     *
     * @return \Spryker\Glue\Kernel\Backend\Container
     */
    public function provideBackendDependencies(Container $container): Container
    {
        $container = parent::provideDependencies($container);

        return $container;
    }
}
