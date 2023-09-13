<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Pyz\Client\InstantChat\Zed;

use Generated\Shared\Transfer\InstantChatRequestTransfer;
use Generated\Shared\Transfer\InstantChatResponseTransfer;

interface InstantChatStubInterface
{
    /**
     * @param \Generated\Shared\Transfer\InstantChatRequestTransfer $instantChatRequestTransfer
     *
     * @return \Generated\Shared\Transfer\InstantChatResponseTransfer
     */
    public function ask(InstantChatRequestTransfer $instantChatRequestTransfer): InstantChatResponseTransfer;
}
