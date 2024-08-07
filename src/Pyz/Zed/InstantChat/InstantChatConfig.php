<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\InstantChat;

use Spryker\Zed\Kernel\AbstractBundleConfig;

class InstantChatConfig extends AbstractBundleConfig
{

    public function getOpenAiToken(): string
    {
        return $this->get('API_KEY_OPEN_AI');
    }
}