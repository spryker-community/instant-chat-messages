<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\InstantChat\Communication\Controller;

use Generated\Shared\Transfer\InstantChatRequestTransfer;
use Generated\Shared\Transfer\InstantChatResponseTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\InstantChat\Business\InstantChatFacadeInterface getFacade()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param InstantChatRequestTransfer $instantChatRequestTransfer
     *
     * @return InstantChatResponseTransfer
     */
    public function askAction(InstantChatRequestTransfer $instantChatRequestTransfer ): InstantChatResponseTransfer
    {
        return $this->getFacade()->askAi($instantChatRequestTransfer);
    }
}
