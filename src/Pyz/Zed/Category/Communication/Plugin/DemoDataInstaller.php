<?php

namespace Pyz\Zed\Category\Communication\Plugin;

use Pyz\Zed\Category\Business\CategoryFacade;
use Spryker\Zed\Installer\Communication\Plugin\AbstractInstallerPlugin;

/**
 * @method \Pyz\Zed\Category\Business\CategoryFacade getFacade()
 */
class DemoDataInstaller extends AbstractInstallerPlugin
{

    public function install()
    {
        $this->getFacade()->installDemoData($this->messenger);
    }

}
