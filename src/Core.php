<?php

namespace primaria\core;

use yii\base\Module as BaseModule;

class Core extends BaseModule
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'primaria\core\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        /*
         if (!\Yii::$app->hasModule('core')) {
            \Yii::$app->setModule('core', ['class' => 'primaria\core\Core']);
        }
         */
    }
} 