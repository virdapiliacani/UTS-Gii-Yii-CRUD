<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\depdrop\DepDrop;
use app\models\Jenisbarang;
use app\models\Merk;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model app\models\elektronik */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="elektronik-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'keterangan')->radioList(['new' => 'Baru','second' => 'Bekas']) ?>

   <?= 
        $form->field($model, 'no_merk')->dropDownList(Merk::getMerk(), ['no'=>'merk','prompt'=>'Select Merk...'])
    ?>
	
   
	<?=  $form->field($model, 'no_jenisbrg') ->widget(DepDrop::classname(), 
        [
            'data' => Jenisbarang::getJenisbarangList($model->no_merk, $model->no_), 
            'options' => ['no' => 'jenisbrg','prompt' => 'Select Jenis Barang...'],
            'pluginOptions' => [
                'depends' => ['cat-no'],
                'placeholder' => 'Select Merk...',
                'url' => Url::to(['elektronik/subcat'])
            ]
        ])
    ?>
	
	

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
