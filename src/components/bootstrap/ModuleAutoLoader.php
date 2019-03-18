<?php
/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace primaria\core\components\bootstrap;


use Yii;
use yii\authclient\Collection;
use yii\base\BootstrapInterface;
use yii\console\Application as ConsoleApplication;
use yii\i18n\PhpMessageSource;

/**
 * ModuleAutoLoader automatically searches for config.php files in module folder an executes them.
 *
 * @author luke
 */
class ModuleAutoLoader implements BootstrapInterface
{
    /** @var array Model's map */
    private $_modelMap = [

    ];

    /** @inheritdoc */
    public function bootstrap($app){
        if ($app->hasModule('core') && ($module = $app->getModule('core')) instanceof Module) {
            $this->_modelMap = array_merge($this->_modelMap, $module->modelMap);

            $configUrlRule = [
                'prefix' => $module->urlPrefix,
                //'rules'  => $module->urlRules,
            ];
        }
    }

}
