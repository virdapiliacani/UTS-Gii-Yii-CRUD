<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\identitas */

$this->title = 'Create Identitas';
$this->params['breadcrumbs'][] = ['label' => 'Identitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="identitas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
