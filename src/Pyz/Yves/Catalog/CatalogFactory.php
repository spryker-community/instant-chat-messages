<?php

namespace Pyz\Yves\Catalog;

use Pyz\Yves\Application\Plugin\Pimple;
use Pyz\Yves\Collector\Plugin\UrlMapper;
use Pyz\Yves\Collector\Mapper\UrlMapperInterface;
use Silex\Application;
use Spryker\Yves\Kernel\AbstractFactory;
use Spryker\Client\Catalog\CatalogClient;
use Spryker\Client\CategoryExporter\CategoryExporterClient;

class CatalogFactory extends AbstractFactory
{

    /**
     * @return \Pyz\Yves\Collector\Mapper\UrlMapperInterface
     */
    public function createUrlMapper()
    {
        $urlMapper = (new UrlMapper())->createUrlMapper();

        return $urlMapper;
    }

    /**
     * @return \Silex\Application
     */
    public function createApplication()
    {
        $application = (new Pimple())->getApplication();

        return $application;
    }

    /**
     * @return \Spryker\Client\Catalog\CatalogClient
     */
    public function createCatalogClient()
    {
        return $this->getLocator()->catalog()->client();
    }

    /**
     * @return \Spryker\Client\CategoryExporter\CategoryExporterClient
     */
    public function createCategoryExporterClient()
    {
        return $this->getLocator()->categoryExporter()->client();
    }

}
