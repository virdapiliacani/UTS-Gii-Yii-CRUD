<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\jenisbarang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jenisbarang-form">

    <?php $form = ActiveForm::begin(); ?>

    
	
	<?php
        $dataPost=ArrayHelper::map(\app\models\Merk::find()->asArray()->all(), 'no', 'merk');
        echo $form->field($model, 'no_merk')
        ->dropDownList(
            $dataPost,           
            ['no'=>'merk']
        );

    ?>

    <?= $form->field($model, 'jenisbrg')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
