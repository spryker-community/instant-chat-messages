<?php

namespace Pyz\Glue\InstantChatRestApi\Processor;

use Generated\Shared\Transfer\InstantChatRequestTransfer;
use Generated\Shared\Transfer\RestInstantMessageRequestAttributesTransfer;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface;

class InstantChatMapper implements InstantChatMapperInterface
{
    /**
     * @param RestInstantMessageRequestAttributesTransfer $restInstantMessageRequestAttributesTransfer
     * @param InstantChatRequestTransfer $instantChatRequestTransfer
     * @return InstantChatRequestTransfer
     */
    public function mapRestInstantMessageRequestToInstantChatRequestTransfer(
        RestInstantMessageRequestAttributesTransfer $restInstantMessageRequestAttributesTransfer,
        InstantChatRequestTransfer $instantChatRequestTransfer
    ): InstantChatRequestTransfer {
        return $instantChatRequestTransfer->fromArray($restInstantMessageRequestAttributesTransfer->toArray(), true);
    }
}
