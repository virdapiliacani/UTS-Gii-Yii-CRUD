<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\kos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_panggilan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
