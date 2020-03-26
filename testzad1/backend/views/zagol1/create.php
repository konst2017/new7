<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Zagol1 */

$this->title = 'Create Zagol1';
$this->params['breadcrumbs'][] = ['label' => 'Zagol1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zagol1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
