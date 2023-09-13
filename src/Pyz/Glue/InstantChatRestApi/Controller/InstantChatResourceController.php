<?php

namespace Pyz\Glue\InstantChatRestApi\Controller;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\InstantChatRequestTransfer;
use Generated\Shared\Transfer\InstantChatResponseTransfer;
use Generated\Shared\Transfer\RestInstantMessageRequestAttributesTransfer;
use Pyz\Glue\InstantChatRestApi\InstantChatRestApiConfig;
use Pyz\Glue\InstantChatRestApi\InstantChatRestApiFactory;
use Spryker\Glue\GlueApplication\Rest\JsonApi\RestResponseInterface;
use Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface;
use Spryker\Glue\Kernel\Controller\AbstractController;

/**
 * @method \Pyz\Glue\InstantChatRestApi\InstantChatRestApiFactory getFactory()
 */
class InstantChatResourceController extends AbstractController
{
    /**
     * @Glue({
     *     "post": {
     *          "summary": [
     *              "Send a chat message"
     *          ],
     *          "parameters": [
     *              {
     *                  "ref": "acceptLanguage"
     *              },
     *              {
     *                  "ref": "ContentType"
     *              }
     *          ],
     *          "responseAttributesClassName": "Generated\\Shared\\Transfer\\InstantChatResponseTransfer",
     *          "requestAttributesClassName": "Generated\\Shared\\Transfer\\InstantChatRequestTransfer",
     *          "responses": {
     *              "400": "Bad Request",
     *              "403": "Unauthorized request"
     *          }
     *     }
     * })
     *
     * @param \Spryker\Glue\GlueApplication\Rest\Request\Data\RestRequestInterface $request
     *
     * @return \Generated\Shared\Transfer\InstantChatResponseTransfer
     */
    public function postAction(RestRequestInterface $request, RestInstantMessageRequestAttributesTransfer $restInstantMessageRequestAttributesTransfer): RestResponseInterface
    {
        $instantChatRequestTransfer = new InstantChatRequestTransfer();
        $instantChatRequestTransfer = $this->getFactory()
            ->createInstantChatMapper()
            ->mapRestInstantMessageRequestToInstantChatRequestTransfer($restInstantMessageRequestAttributesTransfer, $instantChatRequestTransfer);

        $response = $this->getFactory()
            ->getInstantChatClient()
            ->ask($instantChatRequestTransfer);

        $restResource = $this->getFactory()
            ->getResourceBuilder()
            ->createRestResource(InstantChatRestApiConfig::RESOURCE_INSTANT_CHAT, null, $response);

        $builder =  $this->getFactory()
            ->getResourceBuilder()
            ->createRestResponse();

        return $builder->addResource($restResource);
    }
}
