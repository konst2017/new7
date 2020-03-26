<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 09.05.2016
 * Time: 10:50
 */

namespace frontend\controllers;
use frontend\models\Category;
use frontend\models\Wakans;
use frontend\models\Anketa;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\pozel;

class WakanController extends AppController{

   
 
public function actionDob(){
     
				$model = new Anketa();
 
		
                $name2 = Yii::$app->request->post('name2');
				  $name1 = Yii::$app->request->post('name1');
				  
				 $name3 = Yii::$app->request->post('name3');
				  $name4 = Yii::$app->request->post('name4');
        $comment = Yii::$app->request->post('comment');
      
      $posts = Yii::$app->db->createCommand("INSERT INTO anketa(wakan,im,fam,oth,dop) values('{$name1}','{$name2}','{$name3}','{$name4}','{$comment}')")
           ->execute();
		Yii::$app->language = 'ru-RU';
            Yii::$app->session->setFlash('success', 'Ваш заказ принят. Менеджер вскоре свяжется с Вами.');
               Yii::$app->mailer->compose('order', ['name1' => $name1,'name2' => $name2,'name3' => $name3,'name4' => $name,'comment' => $comment])
                    ->setFrom(['spirin.costia@yandex.ru'])
					
                    ->setTo('spirin.costia@yandex.ru')
                    ->setSubject('Заказ')
					
                    ->send();
 
        return $this->render('dob',['name2'=>$name2,'model'=>$model,'name'=>$name2],compact('order'));
 
    
}
} 