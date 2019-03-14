<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\admin\controllers;

use Yii;
use yii\web\HttpException;
use primaria\core\components\Controller;

/**
 * Module Controller controls all third party modules in a humhub installation.
 *
 * @since 0.5
 */
class ModuleController extends Controller
{

    /**
     * @inheritdoc
     */
    public $adminOnly = false;
    private $_onlineModuleManager = null;

    /**
     * @inheritdoc
     */
    public function init()
    {
        //$this->appendPageTitle(Yii::t('AdminModule.base', 'Modules'));

        return parent::init();
    }



    public function actionIndex()
    {
        //Yii::$app->moduleManager->flushCache();

        return $this->redirect(['index']);
    }


}
