<?php
/**
 * @link      http://github.com/zendframework/zend-mvc-plugin-flashmessenger for the canonical source repository
 * @copyright Copyright (c) 2005-2018 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Mvc\Plugin\FlashMessenger;

use Zend\ServiceManager\Factory\InvokableFactory;

class ConfigProvider
{
    /**
     * Return general-purpose zend-mvc-plugin-flashmessenger configuration.
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            'controller_plugins' => $this->getPluginConfig(),
            'view_helpers' => $this->getViewHelperConfig(),
        ];
    }

    /**
     * Provide controller plugin configuration for this component.
     *
     * @return array
     */
    public function getPluginConfig()
    {
        return [
            'aliases' => [
                'flashmessenger' => FlashMessenger::class,
                'flashMessenger' => FlashMessenger::class,
                'FlashMessenger' => FlashMessenger::class,
                'Zend\Mvc\Controller\Plugin\FlashMessenger' => FlashMessenger::class,
            ],
            'factories' => [
                FlashMessenger::class => InvokableFactory::class,
            ],
        ];
    }

    /**
     * Return zend-view helper configuration.
     *
     * @return array
     */
    public function getViewHelperConfig()
    {
        return [
            'aliases' => [
                'flashmessenger' => View\Helper\FlashMessenger::class,
                'flashMessenger' => View\Helper\FlashMessenger::class,
                'FlashMessenger' => View\Helper\FlashMessenger::class,
                'zendviewhelperflashmessenger' => View\Helper\FlashMessenger::class,
            ],
            'factories' => [
                View\Helper\FlashMessenger::class => View\Helper\FlashMessengerFactory::class,
            ],
        ];
    }
}
