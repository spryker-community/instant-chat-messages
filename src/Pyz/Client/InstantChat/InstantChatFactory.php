<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Client\InstantChat;

use Pyz\Client\InstantChat\Zed\InstantChatStub;
use Pyz\Client\InstantChat\Zed\InstantChatStubInterface;
use Spryker\Client\Kernel\AbstractFactory;

class InstantChatFactory extends AbstractFactory
{
    /**
     * @return InstantChatStubInterface
     */
    public function createZedStub(): InstantChatStubInterface
    {
        return new InstantChatStub($this->getProvidedDependency(InstantChatDependencyProvider::SERVICE_ZED));
    }
}
