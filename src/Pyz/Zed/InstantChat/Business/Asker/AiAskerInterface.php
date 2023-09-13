<?php

namespace Pyz\Zed\InstantChat\Business\Asker;

use Generated\Shared\Transfer\InstantChatRequestTransfer;
use Generated\Shared\Transfer\InstantChatResponseTransfer;

interface AiAskerInterface
{

    public function ask(InstantChatRequestTransfer $instantChatRequestTransfer): InstantChatResponseTransfer;
}
