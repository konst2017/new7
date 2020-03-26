<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Towars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="Towar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Towar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
//            'category_id',
          
            'name',
//            'content:ntext',
           
            
			'addtime',
           
             'wes',
			'rost',
			'grud',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
