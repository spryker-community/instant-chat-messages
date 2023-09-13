<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\InstantChat;

use Generated\Shared\Transfer\InstantChatRequestTransfer;
use Generated\Shared\Transfer\InstantChatResponseTransfer;

interface InstantChatClientInterface
{
    /**
     * @param InstantChatRequestTransfer $instantChatRequestTransfer
     *
     * @return InstantChatResponseTransfer
     */
    public function ask(InstantChatRequestTransfer $instantChatRequestTransfer): InstantChatResponseTransfer;
}
