<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Oldalak */

$this->title = 'Create Oldalak';
$this->params['breadcrumbs'][] = ['label' => 'Oldalak', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="oldalak-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
