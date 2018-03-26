<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model app\models\Oldalak */
/* @var $form yii\widgets\ActiveForm */

use iutbay\yii2kcfinder\KCFinderInputWidget;

?>

<div class="oldalak-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'cim')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_leiras')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_kulcsszavak')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'torzs')->widget(CKEditor::className(), [
	'options' => ['rows' => 6],
	'preset' => 'basic'
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
