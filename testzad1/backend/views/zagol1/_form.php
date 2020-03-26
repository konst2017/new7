<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Zagol1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zagol1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'naim')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
