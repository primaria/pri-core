<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace primaria\core\controllers;

use yii;
use yii\web\Controller;


/**
 * Core Controller controls all third party modules in a humhub installation.
 *
 * @since 0.5
 */
class CoreController extends Controller
{
    public function actionIndex()
    {
        //Yii::$app->moduleManager->flushCache();

        return $this->redirect(['index']);
    }


}
