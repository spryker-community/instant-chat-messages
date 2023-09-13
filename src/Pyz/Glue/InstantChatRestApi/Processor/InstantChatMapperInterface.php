<?php

namespace Pyz\Glue\InstantChatRestApi\Processor;

use Generated\Shared\Transfer\InstantChatRequestTransfer;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;

interface InstantChatMapperInterface
{
    /**
     * @param RestRequestInterface $request
     * @return InstantChatRequestTransfer
     */
    public function mapRequestToInstantChatRequestTransfer(RestRequestInterface $request): InstantChatRequestTransfer;
}
