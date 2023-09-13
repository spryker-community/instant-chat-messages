<?php

namespace Pyz\Glue\InstantChatRestApi\Controller;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Spryker\Glue\Kernel\Controller\AbstractController;

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
     * @param \Generated\Shared\Transfer\GlueRequestTransfer $glueRequestTransfer
     *
     * @return \Generated\Shared\Transfer\GlueResponseTransfer
     */
    public function postAction(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer
    {
        $a = 1;
        /*return $this->getFactory()
            ->createPenguinCreator()
            ->createPenguin($glueRequestTransfer);*/

        return new $glueRequestTransfer;
    }
}
