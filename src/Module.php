<?php
/**
 * @link      http://github.com/zendframework/zend-mvc-plugin-flashmessenger for the canonical source repository
 * @copyright Copyright (c) 2005-2018 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Mvc\Plugin\FlashMessenger;

class Module
{
    /**
     * Return zend-mvc-plugin-flashmessenger configuration.
     *
     * @return array
     */
    public function getConfig()
    {
        $provider = new ConfigProvider();
        return [
            'controller_plugins' => $provider->getPluginConfig(),
            'view_helpers' => $provider->getViewHelperConfig(),
        ];
    }
}
