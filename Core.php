<?php
/**
 * Created by PhpStorm.
 * User: alfonso.benavides
 * Date: 13-03-2019
 * Time: 22:43
 */

namespace primaria\core;


use yii\base\Module as BaseModule;

class Core extends BaseModule
{
    /** @var array Model map */
    public $modelMap = [];

    /**
     * @var string The prefix for user module URL.
     *
     * @See [[GroupUrlRule::prefix]]
     */
    public $urlPrefix = 'core';

    /** @var array The rules to be used in URL management. */
    public $urlRules = [
        'module/<action:\w+>' => 'module/<action>'
    ];
}