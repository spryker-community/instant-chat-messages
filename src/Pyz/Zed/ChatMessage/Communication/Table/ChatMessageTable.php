<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ChatMessage\Communication\Table;

use Orm\Zed\ChatMessage\Persistence\Base\PyzChatMessageQuery;
use Orm\Zed\ChatMessage\Persistence\Map\PyzChatMessageTableMap;
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
     * @var \Pyz\Zed\ChatMessage\Persistence\ChatMessageQueryContainerInterface
     */
    protected ChatMessageQueryContainerInterface $chatMessageQueryContainer;

    /**
     * @param \Pyz\Zed\ChatMessage\Persistence\ChatMessageQueryContainerInterface $chatMessageQueryContainer
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
            PyzChatMessageTableMap::COL_USER => 'User',
            PyzChatMessageTableMap::COL_MESSAGE => 'Message',
            PyzChatMessageTableMap::COL_DATE => 'Date',
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

    /**
     * @param array $chatMessages
     *
     * @return string
     */
    protected function addButtons(array $chatMessages): string
    {
        $buttons = [];
        $buttons[] = $this->generateViewButton(
            sprintf('chat-message/view?id-chat=%d', $chatMessages['IdChat']),
            'View',
        );
        $buttons[] = $this->generateRemoveButton(
            sprintf('chat-message/remove-chat?id-chat=%d', $chatMessages['IdChat']),
            'Remove',
        );

        return implode(' ', $buttons);
    }

    /**
     * @param TableConfiguration $config
     *
     * @return array
     */
    protected function prepareData(TableConfiguration $config)
    {
        $result = $this->runQuery($this->prepareQuery(), $config, true);
        $dataArray = $result->toArray();
        $chatMessages = [];
        foreach ($dataArray as $data) {
            $data = [];
            $data[PyzChatMessageTableMap::COL_ID_CHAT] = $data['IdChat'];
            $data[PyzChatMessageTableMap::COL_ID_CHAT_MESSAGE] = $data['IdChatMessage'];
            $data[PyzChatMessageTableMap::COL_USER] = $data['User'];
            $data[PyzChatMessageTableMap::COL_MESSAGE] = $data['Message'];
            $data[PyzChatMessageTableMap::COL_DATE] = $data['Date'];
            $data[static::ACTIONS] = $this->addButtons($data);
            $chatMessages[] = $data;
        }

        return $chatMessages;
    }

    /**
     * @return \Orm\Zed\ChatMessage\Persistence\Base\PyzChatMessageQuery
     */
    protected function prepareQuery(): PyzChatMessageQuery
    {
        return $this->chatMessageQueryContainer->queryChatMessage();
    }
}
