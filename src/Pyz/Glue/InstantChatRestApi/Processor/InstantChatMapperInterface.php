<?php

namespace Pyz\Glue\InstantChatRestApi\Processor;

use Generated\Shared\Transfer\InstantChatRequestTransfer;
use Generated\Shared\Transfer\RestInstantMessageRequestAttributesTransfer;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;

interface InstantChatMapperInterface
{
    /**
     * @param RestInstantMessageRequestAttributesTransfer $restInstantMessageRequestAttributesTransfer
     * @param InstantChatRequestTransfer $instantChatRequestTransfer
     * @return InstantChatRequestTransfer
     */
    public function mapRestInstantMessageRequestToInstantChatRequestTransfer(
        RestInstantMessageRequestAttributesTransfer $restInstantMessageRequestAttributesTransfer,
        InstantChatRequestTransfer $instantChatRequestTransfer
    ): InstantChatRequestTransfer;
}
