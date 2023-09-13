<?php

namespace Pyz\Glue\InstantChatRestApi\Controller;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\InstantChatRequestTransfer;
use Generated\Shared\Transfer\InstantChatResponseTransfer;
use Pyz\Glue\InstantChatRestApi\InstantChatRestApiFactory;
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
    public function postAction(RestRequestInterface $request): InstantChatResponseTransfer
    {
        $instantChatRequestTransfer = $this->getFactory()
            ->createInstantChatMapper()
            ->mapRequestToInstantChatRequestTransfer($request);

        return $this->getFactory()
            ->getInstantChatClient()
            ->ask($instantChatRequestTransfer);

        /*$response = new InstantChatResponseTransfer();
        $response->setAnswer('Yes');
        return new $response;*/
    }
}
