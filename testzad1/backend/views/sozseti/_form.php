<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Sozseti */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sozseti-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'naim')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'image')->fileInput() ?>
    <?= $form->field($model, 'adr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
