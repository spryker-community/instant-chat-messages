<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ChatMessage\Communication;

use Pyz\Zed\ChatMessage\Communication\Table\ChatMessageTable;
use Spryker\Zed\Kernel\Communication\AbstractCommunicationFactory;

/**
 * @method \Pyz\Zed\ChatMessage\Persistence\ChatMessageQueryContainerInterface getQueryContainer()
 * @method \Pyz\Zed\ChatMessage\ChatMessageConfig getConfig()
 */
class ChatMessageCommunicationFactory extends AbstractCommunicationFactory
{
    /**
     * @return \Pyz\Zed\ChatMessage\Communication\Table\ChatMessageTable
     */
    public function createChatMessageTable(): ChatMessageTable
    {
        return new ChatMessageTable(
            $this->getQueryContainer(),
        );
    }
}
