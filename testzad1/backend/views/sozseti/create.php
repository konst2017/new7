<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Sozseti */

$this->title = 'Create Sozseti';
$this->params['breadcrumbs'][] = ['label' => 'Sozsetis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sozseti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
