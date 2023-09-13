<?php

namespace Pyz\Zed\ChatMessage\Persistence;


use Orm\Zed\ChatMessage\Persistence\PyzChatMessageQuery;
use Orm\Zed\ChatMessage\Persistence\PyzChatQuery;
use Spryker\Zed\Kernel\Persistence\AbstractQueryContainer;

/**
 * @method \Pyz\Zed\ChatMessage\Persistence\ChatMessagePersistenceFactory getFactory()
 */
class ChatMessageQueryContainer extends AbstractQueryContainer implements ChatMessageQueryContainerInterface
{

    public function queryChatMessage(): PyzChatMessageQuery
    {
        return $this->getFactory()->createPyzChatMessageQuery();
    }

    /**
     * @return PyzChatQuery
     */
    public function queryChat(): PyzChatQuery
    {
        return $this->getFactory()->createPyzChatQuery();
    }
}
