<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\kos */

$this->title = 'Update Kos: ' . $model->no_kamar;
$this->params['breadcrumbs'][] = ['label' => 'Kos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->no_kamar, 'url' => ['view', 'id' => $model->no_kamar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
