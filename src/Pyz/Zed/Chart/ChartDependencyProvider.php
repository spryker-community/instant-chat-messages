<?php

/**
 * This file is part of the Spryker Suite.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\Chart;

use Spryker\Zed\Chart\ChartDependencyProvider as SprykerChartDependencyProvider;
use Pyz\Zed\ExampleChart\Plugin\ExampleChart;
use Spryker\Zed\SalesStatistics\Communication\Plugin\CountOrderPluginChart;
use Spryker\Zed\SalesStatistics\Communication\Plugin\StatusOrderPluginChart;
use Spryker\Zed\SalesStatistics\Communication\Plugin\TopOrdersPluginChart;

class ChartDependencyProvider extends SprykerChartDependencyProvider
{
     /**
      * @return \Spryker\Shared\Chart\Dependency\Plugin\ChartPluginInterface[]
      */
    protected function getChartPlugins(): array
    {
        return [
            new CountOrderPluginChart(),
            new StatusOrderPluginChart(),
            new TopOrdersPluginChart(),
            new ExampleChart(),
        ];
    }
}
