<?php

namespace Pyz\Zed\ChatMessage\Persistence;


use Orm\Zed\ChatMessage\Persistence\Base\PyzChatMessageQuery;
use Orm\Zed\ChatMessage\Persistence\Base\PyzChatQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;


class ChatMessagePersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return PyzChatQuery
     */
    public function createPyzChatQuery(): PyzChatQuery
    {
        return PyzChatQuery::create();
    }

    /**
     * @return PyzChatMessageQuery
     */
    public function createPyzChatMessageQuery(): PyzChatMessageQuery
    {
        return PyzChatMessageQuery::create();
    }
}
