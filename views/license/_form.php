<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\License */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="license-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'serial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'public_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'private_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'commit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_member')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'payment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valid_date')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'valid_date')->widget(DateTimePicker::className(),[
    'name' => 'valid_date',
    'type' => DateTimePicker::TYPE_INPUT,
    'options' => ['placeholder' => 'Ввод даты/времени...'],
    'convertFormat' => true,
    'value'=> date("d.m.Y h:i",(integer) $model->valid_date),
    'pluginOptions' => [
        'format' => 'yyyy-MM.dd hh:i:s',
        'autoclose'=>true,
        'weekStart'=>1, //неделя начинается с понедельника
        'startDate' => '01.05.2015 00:00', //самая ранняя возможная дата
        'todayBtn'=>true, //снизу кнопка "сегодня"
    ]
]); ?>

    <?= $form->field($model, 'date_start')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'temp1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'temp2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'temp3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'temp4')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'temp5')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'temp6')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lic_type')->textInput() ?>

    <?= $form->field($model, 'temp7')->textInput() ?>

    <?= $form->field($model, 'temp8')->textInput() ?>

    <?= $form->field($model, 'temp9')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
