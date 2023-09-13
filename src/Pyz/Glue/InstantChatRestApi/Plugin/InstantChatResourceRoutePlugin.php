<?php

namespace Pyz\Glue\InstantChatRestApi\Plugin;

use Generated\Shared\Transfer\InstantChatRequestTransfer;
use Generated\Shared\Transfer\RestInstantMessageRequestAttributesTransfer;
use Pyz\Glue\InstantChatRestApi\InstantChatRestApiConfig;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRouteCollectionInterface;
use Spryker\Glue\GlueApplicationExtension\Dependency\Plugin\ResourceRoutePluginInterface;
use Spryker\Glue\Kernel\AbstractPlugin;
use Symfony\Component\HttpFoundation\Request;

class InstantChatResourceRoutePlugin extends AbstractPlugin implements ResourceRoutePluginInterface
{

    public function configure(ResourceRouteCollectionInterface $resourceRouteCollection): ResourceRouteCollectionInterface
    {
        $resourceRouteCollection
            ->addPost(Request::METHOD_POST, false);

        return $resourceRouteCollection;
    }

    public function getResourceType(): string
    {
        return InstantChatRestApiConfig::RESOURCE_INSTANT_CHAT;
    }

    public function getController(): string
    {
        return 'instant-chat-resource';
    }

    public function getResourceAttributesClassName(): string
    {
        return RestInstantMessageRequestAttributesTransfer::class;
    }
}
