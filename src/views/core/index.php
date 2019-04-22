<?php

/* @var $this yii\web\View */


use yii\helpers\Html;

$this->title = 'Core';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="core-default-index">
    <h1><?= $this->context->action->uniqueId ?></h1>
    <p>
        Este es el contenido de la vista para la accion "<?= $this->context->action->id ?>".
        La accion pertenece al controlador "<?= get_class($this->context) ?>"
        en el modulo "<?= $this->context->module->id ?>".
    </p>
    <p>
        Puede personalizar la pagina editando el siguiente archivo:<br>
        <code><?= __FILE__ ?></code>
    </p>

    <h4><?= Yii::t('base', 'General Settings'); ?></h4>
</div>
