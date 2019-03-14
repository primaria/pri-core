<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace primaria\core\components;

use Yii;

/**
 * Base controller for administration section
 *
 * @author luke
 */
class Controller extends \yii\web\Controller
{

    /**
     * @event \yii\base\Event an event raised on init a controller.
     */
    const EVENT_INIT = 'init';

    /**
     * @var null|string the name of the sub layout to be applied to this controller's views.
     * This property mainly affects the behavior of [[render()]].
     */
    public $subLayout = null;

    /**
     * @var string title of the rendered page
     */
    public $pageTitle;

    /**
     * @var array page titles
     */
    public $actionTitlesMap = [];

    /**
     * @var boolean append page title
     */
    public $prependActionTitles = true;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->trigger(self::EVENT_INIT);
    }

}
