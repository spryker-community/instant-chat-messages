<?php

namespace Pyz\Glue\InstantChatRestApi;

use Spryker\Glue\Kernel\AbstractBundleDependencyProvider;
use Spryker\Glue\Kernel\Container;

class InstantChatRestApiDependencyProvider extends AbstractBundleDependencyProvider
{
    public const CLIENT_INSTANT_CHAT = 'CLIENT_INSTANT_CHAT';

    /**
     * @param \Spryker\Glue\Kernel\Backend\Container $container
     *
     * @return \Spryker\Glue\Kernel\Backend\Container
     */
    public function provideDependencies(Container $container): Container
    {
        $container = parent::provideDependencies($container);
        $container = $this->addInstantChatClient($container);

        return $container;
    }

    public function addInstantChatClient(Container $container): Container
    {
        $container->set(static::CLIENT_INSTANT_CHAT, function (Container $container){
            return $container->getLocator()->instantChat()->client();
        });

        return $container;
    }
}
