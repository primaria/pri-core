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

class Core extends BaseModule
{
    public $controllerNamespace = 'primaria\core\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {

        parent::init();

        /*if (!\Yii::$app->hasModule('core')) {
            \Yii::$app->setModule('core', ['class' => 'primaria\core\Core']);
        }*/

    }
}