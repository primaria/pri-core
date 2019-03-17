<?php
/**
 * Created by PhpStorm.
 * User: alfonso.benavides
 * Date: 13-03-2019
 * Time: 22:43
 */

namespace primaria\core;


use yii\base\Module as BaseModule;

class CoreModule extends BaseModule
{
     /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        //$this->layout = '@app/modules/prueba/views/layouts/main.php';

    }
}