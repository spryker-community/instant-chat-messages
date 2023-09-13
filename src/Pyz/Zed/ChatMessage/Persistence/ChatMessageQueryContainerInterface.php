<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ChatMessage\Persistence;

use Orm\Zed\ChatMessage\Persistence\PyzChatMessageQuery;
use Orm\Zed\ChatMessage\Persistence\PyzChatQuery;

interface ChatMessageQueryContainerInterface
{
    /**
     * @return \Pyz\Zed\ChatMessage\Persistence\PyzChatMessageQueryQuery
     */
    public function queryChatMessage(): PyzChatMessageQuery;

    /**
     * @return \Orm\Zed\ChatMessage\Persistence\PyzChatQuery
     */
    public function queryChat(): PyzChatQuery;
}
