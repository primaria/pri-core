<?php
/**
 * Created by PhpStorm.
 * User: alfonso.benavides
 * Date: 13-03-2019
 * Time: 22:43
 */

namespace primaria\core;


use primaria\core\components\Module;
use yii\web\HttpException;

class ModuleCore extends Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'primaria\core\controllers';

    /**
     * @inheritdoc
     */
    public $defaultRoute = 'index';

    /**
     * @inheritdoc
     */
    public $isCoreModule = true;

    /**
     * @inheritdoc
     */
    public $resourcesPath = 'resources';

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return Yii::t('AdminModule.base', 'Admin');
    }

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        //$this->layout = '@app/modules/prueba/views/layouts/main.php';

    }
}