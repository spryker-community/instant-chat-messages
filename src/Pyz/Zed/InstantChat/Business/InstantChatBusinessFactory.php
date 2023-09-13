<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\InstantChat\Business;

use Pyz\Zed\InstantChat\Business\Asker\AiAsker;
use Pyz\Zed\InstantChat\Business\Asker\AiAskerInterface;
use Pyz\Zed\InstantChat\InstantChatConfig;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method InstantChatConfig getConfig()
 */
class InstantChatBusinessFactory extends AbstractBusinessFactory
{

    public function createAiAsker(): AiAskerInterface
    {
        return new AiAsker($this->getConfig()->getOpenAiToken());
    }
}
