<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Masteras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mastera-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mastera', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'im',
            'img',
            'wozr',
            'wes',
            //'rost',
            //'grud',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
