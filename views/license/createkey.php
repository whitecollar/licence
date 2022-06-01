<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\License */

$this->title = 'Create Key';
$this->params['breadcrumbs'][] = ['label' => 'Licenses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="license-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_createkey', [
        'model' => $model,
    ]) ?>

</div>
