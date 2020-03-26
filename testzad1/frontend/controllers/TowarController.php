<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 08.05.2016
 * Time: 10:00
 */

namespace frontend\controllers;

use frontend\models\Product;
use frontend\models\Category;
use frontend\models\Wakans;
use frontend\models\Nagrad;
use frontend\models\Towar;
use Yii;
use yii\data\Pagination;


class TowarController extends AppController{

public function actionIndex(){

       $hits = Towar::find()->limit(6)->all();

      
        return $this->render('index', compact('hits'));


       


}


public function actionView($id){
        $id = Yii::$app->request->get('id');
        $product = Towar::findOne($id);
  if(empty($product))
            throw new \yii\web\HttpException(404, 'Такого товара нет');

        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('E-SHOPPER | ' . $product->name, $product->keywords, $product->description);
        return $this->render('view', compact('product', 'hits'));
 
    }



  public function actionZajaw($id){
        $id = Yii::$app->request->get('id');
        $product = Towar::findOne($id);
  if(empty($product))
            throw new \yii\web\HttpException(404, 'Такого товара нет');

        $this->setMeta('E-SHOPPER | ' . $product->name, $product->keywords, $product->description);
        return $this->render('zajaw', compact('product'));
 
    }

}

