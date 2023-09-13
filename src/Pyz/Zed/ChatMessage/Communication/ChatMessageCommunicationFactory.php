<?php

namespace Pyz\Zed\ChatMessage\Communication;

use Pyz\Zed\ChatMessage\Communication\Table\ChatMessageTable;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

/**
 * @method \Pyz\Zed\ChatMessage\Persistence\ChatMessageQueryContainerInterface getQueryContainer()
 */
class ChatMessageCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return ChatMessageTable
     */
    public function createChatMessageTable(): ChatMessageTable
    {
        return new ChatMessageTable(
            $this->getQueryContainer(),
        );
    }
}
