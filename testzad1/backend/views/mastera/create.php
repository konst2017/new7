<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Mastera */

$this->title = 'Create Mastera';
$this->params['breadcrumbs'][] = ['label' => 'Masteras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mastera-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
