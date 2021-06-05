<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\IdentitasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Identitas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="identitas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Identitas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nama_lengkap',
            'nama_panggilan',
			'jekel',
            'daerah_asal',
            'tgl_lahir',
            'tmpt_kuliah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
