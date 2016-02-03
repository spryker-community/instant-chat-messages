<?php

namespace Pyz\Yves\Twig\Model;

use Spryker\Yves\Application\Application;
use Pyz\Yves\Twig\TwigSettings;

class YvesExtension extends \Twig_Extension
{

    /**
     * @var \Spryker\Yves\Application\Application
     */
    protected $application;

    /**
     * @var \Pyz\Yves\Twig\TwigSettings
     */
    protected $settings;

    /**
     * @param \Spryker\Yves\Application\Application $application
     * @param \Pyz\Yves\Twig\TwigSettings $twigSettings
     */
    public function __construct(Application $application, TwigSettings $twigSettings)
    {
        $this->application = $application;
        $this->settings = $twigSettings;
    }

    /**
     * Returns the name of the extension.
     *
     * @return string The extension name
     */
    public function getName()
    {
        return 'yves';
    }

    /**
     * @return array
     */
    public function getFilters()
    {
        $twigFilters = parent::getFilters();

        foreach ($this->settings->getTwigFilters() as $filter) {
            $twigFilters = array_merge_recursive($twigFilters, $filter->getFilters());
        }

        return $twigFilters;
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        $twigFunctions = parent::getFunctions();

        foreach ($this->settings->getTwigFunctions() as $function) {
            $twigFunctions = array_merge_recursive($twigFunctions, $function->getFunctions($this->application));
        }

        return $twigFunctions;
    }

}
