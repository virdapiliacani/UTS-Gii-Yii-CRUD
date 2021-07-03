<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\jenisbarang */

$this->title = 'Update Jenisbarang: ' . $model->no;
$this->params['breadcrumbs'][] = ['label' => 'Jenisbarangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no, 'url' => ['view', 'id' => $model->no]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenisbarang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
