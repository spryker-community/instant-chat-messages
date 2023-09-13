<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\InstantChat\Business;

use Generated\Shared\Transfer\InstantChatRequestTransfer;
use Generated\Shared\Transfer\InstantChatResponseTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\InstantChat\Business\InstantChatBusinessFactory getFactory()
 * @method \Pyz\Zed\InstantChat\Persistence\InstantChatRepositoryInterface getRepository()
 * @method \Pyz\Zed\InstantChat\Persistence\InstantChatEntityManagerInterface getEntityManager()
 */
class InstantChatFacade extends AbstractFacade implements InstantChatFacadeInterface
{

    public function askAi(InstantChatRequestTransfer $instantChatRequestTransfer) : InstantChatResponseTransfer{
        return $this->getFactory()->createAiAsker()->ask($instantChatRequestTransfer);
    }
}
