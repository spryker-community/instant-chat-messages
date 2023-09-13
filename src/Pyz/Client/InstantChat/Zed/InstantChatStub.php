<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Pyz\Client\InstantChat\Zed;

use Generated\Shared\Transfer\AddressTransfer;
use Generated\Shared\Transfer\CustomerResponseTransfer;
use Generated\Shared\Transfer\CustomerTransfer;
use Generated\Shared\Transfer\InstantChatRequestTransfer;
use Generated\Shared\Transfer\InstantChatResponseTransfer;
use Spryker\Client\ZedRequest\ZedRequestClient;

class InstantChatStub implements InstantChatStubInterface
{
    /**
     * @var \Spryker\Client\ZedRequest\ZedRequestClient
     */
    protected $zedStub;

    /**
     * @param \Spryker\Client\ZedRequest\ZedRequestClient $zedStub
     */
    public function __construct(ZedRequestClient $zedStub)
    {
        $this->zedStub = $zedStub;
    }

    /**
     * @param InstantChatRequestTransfer $instantChatRequestTransfer
     *
     * @return \Generated\Shared\Transfer\InstantChatResponseTransfer|void
     */
    public function ask(InstantChatRequestTransfer $instantChatRequestTransfer): InstantChatResponseTransfer
    {
        /** @var InstantChatResponseTransfer $instantChatResponseTransfer */
        //$instantChatResponseTransfer = $this->zedStub->call('/instant-chat/gateway/ask', $instantChatRequestTransfer);
        $instantChatResponseTransfer = new InstantChatResponseTransfer();
        $instantChatResponseTransfer->setAnswer('Yes');

        return $instantChatResponseTransfer;
    }
}
