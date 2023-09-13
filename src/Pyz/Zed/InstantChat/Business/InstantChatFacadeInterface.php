<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\InstantChat\Business;

use Generated\Shared\Transfer\InstantChatRequestTransfer;
use Generated\Shared\Transfer\InstantChatResponseTransfer;

interface InstantChatFacadeInterface
{
    public function askAi(InstantChatRequestTransfer $instantChatRequestTransfer): InstantChatResponseTransfer;
}
