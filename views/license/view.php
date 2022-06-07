<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\License */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Licenses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="license-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
          //  'serial',
            'public_key',
            'private_key',
            'status',
            'mail',
         //   'commit',
         //   'id_member',
         //   'type',
            'inn',
            'payment',
            'valid_date',
            'date_start',
         //   'temp1',
         //   'temp2',
         //   'temp3',
         //   'temp4',
         //   'temp5',
         //   'temp6',
         //   'lic_type',
         //   'temp7',
         //   'temp8',
         //   'temp9',
        ],
    ]) ?>

</div>
