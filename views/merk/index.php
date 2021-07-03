<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MerkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Merks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="merk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Merk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'no',
            'merk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
