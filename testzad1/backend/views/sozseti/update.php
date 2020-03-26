<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sozseti */

$this->title = 'Update Sozseti: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sozsetis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sozseti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
