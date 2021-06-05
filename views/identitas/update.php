<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\identitas */

$this->title = 'Update Identitas: ' . $model->nama_panggilan;
$this->params['breadcrumbs'][] = ['label' => 'Identitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama_panggilan, 'url' => ['view', 'id' => $model->nama_panggilan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="identitas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
