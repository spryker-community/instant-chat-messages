<?php

namespace Pyz\Glue\InstantChatRestApi;

use Pyz\Client\InstantChat\InstantChatClientInterface;
use Pyz\Glue\InstantChatRestApi\Processor\InstantChatMapper;
use Pyz\Glue\InstantChatRestApi\Processor\InstantChatMapperInterface;
use Spryker\Glue\Kernel\AbstractFactory;

class InstantChatRestApiFactory extends AbstractFactory
{
    public function getInstantChatClient(): InstantChatClientInterface
    {
        return $this->getProvidedDependency(InstantChatRestApiDependencyProvider::CLIENT_INSTANT_CHAT);
    }

    /**
     * @return InstantChatMapperInterface
     */
    public function createInstantChatMapper(): InstantChatMapperInterface
    {
        return new InstantChatMapper();
    }
}
