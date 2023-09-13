<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ChatMessage\Persistence;

use Orm\Zed\ChatMessage\Persistence\PyzChatMessageQuery;
use Orm\Zed\ChatMessage\Persistence\PyzChatQuery;
use Spryker\Zed\Kernel\Persistence\AbstractQueryContainer;

/**
 * @method \Pyz\Zed\ChatMessage\Persistence\ChatMessagePersistenceFactory getFactory()
 */
class ChatMessageQueryContainer extends AbstractQueryContainer implements ChatMessageQueryContainerInterface
{
 /**
  * @return \Orm\Zed\ChatMessage\Persistence\PyzChatMessageQuery
  */
    public function queryChatMessage(): PyzChatMessageQuery
    {
        return $this->getFactory()->createPyzChatMessageQuery();
    }

    /**
     * @return \Orm\Zed\ChatMessage\Persistence\PyzChatQuery
     */
    public function queryChat(): PyzChatQuery
    {
        return $this->getFactory()->createPyzChatQuery();
    }
}
