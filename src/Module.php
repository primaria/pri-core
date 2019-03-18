<?php
/**
 * Created by PhpStorm.
 * User: alfonso.benavides
 * Date: 13-03-2019
 * Time: 22:43
 */

namespace primaria\core;

use yii;
use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace;

    /**
     * @inheritdoc
     */
    public function init()
    {
        if (empty($this->controllerNamespace)) {
            $this->controllerNamespace = \Yii::$app->controllerNamespace === 'primaria\core\controllers';
        }
        parent::init();


    }
}