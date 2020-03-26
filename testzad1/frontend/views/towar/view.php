<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<section>
<div class="container">
<div class="row">
<div class="col-sm-3">
    <div class="left-sidebar">
      
        <ul class="catalog category-products">
         
        </ul>

        

       
    </div>
</div>

<?php

?>

<div class="col-sm-9">
<div class="product-details"><!--product-details-->
    <div class="col">
        <div class="view-product">
           
          
        </div>
         <?php $mainImg = $product->getImage();?>
		 
    <div class="col-sm-7">
	
        <div class="product"><!--/product-information-->
          
            <h2><?= $product->name?></h2>
          
   <div class="img"> 
 <?= Html::img($mainImg->getUrl('268x249'), ['alt' => $product->name ])?>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 </div>
  <div class="product">
         <br>   
            
            
          <?= $product->content?> 
		
 
			<h2> <input class="icon3"  value="" type="submit" style="background-image: url(/testzad1/frontend/web/img/wes.png);"/>Вес:<?= $product->wes?></h2>
			
			<h2> <input class="icon3"  value="" type="submit" style="background-image: url(/testzad1/frontend/web/img/rost.png);"/>Рост:<?= $product->rost?></h2>
			<h2> <input class="icon3"  value="" type="submit" style="background-image: url(/testzad1/frontend/web/img/grud2.png);"/>Грудь<?= $product->grud?></h2>
			
		 <p><a class="btn" href="<?= \yii\helpers\Url::to(['towar/zajaw', 'id' => $product->id]) ?>"><?php  echo"Заявка"; ?></a></p>	
        </div><!--/product-information-->
    </div>
</div><!--/product-details-->


<br><br>
    <br>
<br><br>
    <br>


</div>
</div>
</div>
</section>