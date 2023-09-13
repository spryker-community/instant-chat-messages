<?php

namespace Pyz\Glue\InstantChatRestApi\Processor;

use Generated\Shared\Transfer\InstantChatRequestTransfer;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;

class InstantChatMapper implements InstantChatMapperInterface
{
    /**
     * @param RestRequestInterface $request
     * @return InstantChatRequestTransfer
     */
    public function mapRequestToInstantChatRequestTransfer(RestRequestInterface $request): InstantChatRequestTransfer {
        $attributes = $request->getResource()->getAttributes();
        return $attributes;
    }
}
