<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OldalakSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="oldalak-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cim') ?>

    <?= $form->field($model, 'link') ?>

    <?= $form->field($model, 'meta_leiras') ?>

    <?= $form->field($model, 'meta_kulcsszavak') ?>

    <?php // echo $form->field($model, 'torzs') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
