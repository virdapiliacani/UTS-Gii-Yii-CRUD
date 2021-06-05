<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no_kamar',
            'nama_panggilan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
