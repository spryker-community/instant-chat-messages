<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ChatMessage\Persistence;

use Orm\Zed\ChatMessage\Persistence\Base\PyzChatMessageQuery;
use Orm\Zed\ChatMessage\Persistence\Base\PyzChatQuery;
use Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory;

/**
 * @method \Pyz\Zed\ChatMessage\Persistence\ChatMessageQueryContainerInterface getQueryContainer()
 * @method \Pyz\Zed\ChatMessage\ChatMessageConfig getConfig()
 */
class ChatMessagePersistenceFactory extends AbstractPersistenceFactory
{
    /**
     * @return \Orm\Zed\ChatMessage\Persistence\Base\PyzChatQuery
     */
    public function createPyzChatQuery(): PyzChatQuery
    {
        return PyzChatQuery::create();
    }

    /**
     * @return \Orm\Zed\ChatMessage\Persistence\Base\PyzChatMessageQuery
     */
    public function createPyzChatMessageQuery(): PyzChatMessageQuery
    {
        return PyzChatMessageQuery::create();
    }
}
