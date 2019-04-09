<?php

/* @var $this yii\web\View */


use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>

    <pre>
        <?php
        //print_r(\primaria\core\components\ModuleManager::getModule('prueba'));
        //print_r(Yii::$container);
        print_r(Yii::$app->getModule('core'));
        ?>
    </pre>


    <pre>
        <?php

        //print_r(ModuleAutoLoader::findModules(Yii::$app->params['moduleAutoloadPaths']));
        ?>
    </pre>

    <pre>
        <?= print_r(yii::$aliases); ?>
    </pre>

    <pre>
        <?= print_r(yii::$app); ?>
    </pre>

</div>
