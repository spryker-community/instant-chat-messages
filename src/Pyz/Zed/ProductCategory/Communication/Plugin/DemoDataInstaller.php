<?php

namespace Pyz\Zed\ProductCategory\Communication\Plugin;

use Pyz\Zed\ProductCategory\Business\ProductCategoryFacade;
use Spryker\Zed\Installer\Communication\Plugin\AbstractInstallerPlugin;
use Pyz\Zed\ProductCategory\Communication\ProductCategoryCommunicationFactory;

/**
 * @method \Pyz\Zed\ProductCategory\Communication\ProductCategoryCommunicationFactory getFactory()
 * @method \Pyz\Zed\ProductCategory\Business\ProductCategoryFacade getFacade()
 */
class DemoDataInstaller extends AbstractInstallerPlugin
{

    public function install()
    {
        $this->getFacade()->installDemoData($this->messenger);
    }

}
