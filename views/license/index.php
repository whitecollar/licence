<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Licenses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="license-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create License', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'serial',
            'public_key',
            'private_key',
            //'status',
            //'mail',
            //'commit',
            //'id_member',
            //'type',
            //'inn',
            //'payment',
            //'valid_date',
            //'date_start',
            //'temp1',
            //'temp2',
            //'temp3',
            //'temp4',
            //'temp5',
            //'temp6',
            //'lic_type',
            //'temp7',
            //'temp8',
            //'temp9',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
