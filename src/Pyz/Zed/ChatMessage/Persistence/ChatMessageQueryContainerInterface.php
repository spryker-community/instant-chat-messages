<?php

namespace Pyz\Zed\ChatMessage\Persistence;

use Orm\Zed\ChatMessage\Persistence\PyzChatMessageQuery;
use Orm\Zed\ChatMessage\Persistence\PyzChatQuery;

interface ChatMessageQueryContainerInterface
{
    /**
     * @return PyzChatMessageQueryQuery
     */
    public function queryChatMessage(): PyzChatMessageQuery;

    /**
     * @return PyzChatQuery
     */
    public function queryChat(): PyzChatQuery;
}
