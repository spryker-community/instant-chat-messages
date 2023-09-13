<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ChatMessage\Communication\Table;

use Orm\Zed\ChatMessage\Persistence\Base\PyzChatQuery;
use Orm\Zed\ChatMessage\Persistence\Map\PyzChatMessageTableMap;
use Orm\Zed\ChatMessage\Persistence\Map\PyzChatTableMap;
use Pyz\Zed\ChatMessage\Persistence\ChatMessageQueryContainerInterface;
use Spryker\Zed\Gui\Communication\Table\AbstractTable;
use Spryker\Zed\Gui\Communication\Table\TableConfiguration;

class ChatMessageTable extends AbstractTable
{
    /**
     * @var string
     */
    public const ACTIONS = 'actions';

    /**
     * @var ChatMessageQueryContainerInterface
     */
    protected ChatMessageQueryContainerInterface $chatMessageQueryContainer;

    /**
     * @param ChatMessageQueryContainerInterface $chatMessageQueryContainer
     */
    public function __construct(
        ChatMessageQueryContainerInterface $chatMessageQueryContainer,
    ) {
        $this->chatMessageQueryContainer = $chatMessageQueryContainer;
    }

    /**
     * @param \Spryker\Zed\Gui\Communication\Table\TableConfiguration $config
     *
     * @return \Spryker\Zed\Gui\Communication\Table\TableConfiguration
     */
    protected function configure(TableConfiguration $config): TableConfiguration
    {
        $config->setHeader([
            PyzChatMessageTableMap::COL_ID_CHAT => 'Chat Id',
            PyzChatMessageTableMap::COL_ID_CHAT_MESSAGE => 'Chat Message Id',
            PyzChatMessageTableMap::COL_MESSAGE => 'Message',
            static::ACTIONS => self::ACTIONS,
        ]);

        $config->addRawColumn(self::ACTIONS);

        $config->setSortable([
            PyzChatMessageTableMap::COL_ID_CHAT,
            PyzChatMessageTableMap::COL_ID_CHAT_MESSAGE,
            PyzChatMessageTableMap::COL_MESSAGE,
        ]);

        $config->setSearchable([
            PyzChatMessageTableMap::COL_MESSAGE,
        ]);

        return $config;
    }

    protected function prepareData(TableConfiguration $config)
    {
        return $this->runQuery($this->prepareQuery(), $config);


    }

    /**
     * @return PyzChatQuery
     */
    protected function prepareQuery(): PyzChatQuery
    {
       return $this->chatMessageQueryContainer->queryChat();
    }
}
