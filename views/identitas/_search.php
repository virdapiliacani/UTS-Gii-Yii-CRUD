<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IdentitasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="identitas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'nama_lengkap') ?>

    <?= $form->field($model, 'nama_panggilan') ?>
	
	<?= $form->field($model, 'jekel') ?>

    <?= $form->field($model, 'daerah_asal') ?>

    <?= $form->field($model, 'tgl_lahir') ?>

    <?= $form->field($model, 'tmpt_kuliah') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
