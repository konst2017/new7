<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<section class="container">

        <h3>Вакансия</h3>
        
        <div><!--/product-information-->
          <?php $search = ActiveForm::begin([
            'action' => ['wakan/dob'],
            'options' => [
                'id' => 'search-form',
                'method' => 'post',
            ]
        ]);
        ?>
      <div class="login">      
          
         <input type="text" value="<?= $product->name?>" name="name1" class="inp1" size="40">
            
          <?php if( Yii::$app->session->hasFlash('success') ): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </div>
    <?php endif;?>
           
           <h7> <?= $product->content?> </h7>
		   <br><br><br>
			<h1>Заполните форму</h1>
		<h7>Ваше имя</h7>	<input type="text" value="" name="name2" class="inp1" size="40">
		<h7>Ваше фамилия</h7>	<input type="text" value="" name="name3" class="inp1" size="40">
        <h7>Ваше отчество</h7>	<input type="text" value="" name="name4" class="inp1" size="40">
           <h7>Дполнительная информация (+контактные данные)</h7>	  <textarea name="comment" class="inp1" size="80"></textarea>		
			<p><input class="otpr"  value="Отправить" type="submit" style="background-image: url(/testzad1/frontend/web/img/otpr.png);"/></p>
			
        </div><!--/product-information-->
    </div>
   
</div><!--/product-details-->

<?php ActiveForm::end(); ?>
</div>
</div>

</section>
