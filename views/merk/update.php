<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\merk */

$this->title = 'Update Merk: ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Merks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'id' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="merk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
