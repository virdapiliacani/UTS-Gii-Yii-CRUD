<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\identitas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="identitas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_panggilan')->textInput(['maxlength' => true]) ?>
	
	<?php
		echo $form->field($model, 'jekel')->dropDownList(
            ['Pr' => 'Perempuan', 'Lk' => 'Laki-laki']
    ); ?>

    <?= $form->field($model, 'daerah_asal')->textInput(['maxlength' => true]) ?>

    
	<?=$form->field($model, 'tgl_lahir')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Pilih Tanggal...'],
    'pluginOptions' => [
        'autoclose'=>true,
		'format' => 'yyyy-mm-dd'
    ]
	]);?>

    <?= $form->field($model, 'tmpt_kuliah')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
