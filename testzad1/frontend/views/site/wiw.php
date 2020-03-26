<?php
use yii\helpers\Html;
/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
use frontend\models\Golosow;
use frontend\models\Wopr;
use frontend\models\Sozseti;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use yii\db\ActiveQuery;

?>


<div class="masonry">

<div class="item"> 

 <?php foreach($hits as $hit): ?>
 <?php $mainImg = $hit->getImage();?>
<a href=" <?php  echo"$hit->adr"; ?>	"> <?= Html::img($mainImg->getUrl('32x32'), ['alt' => $hit->naim])?></a>
 
 
 
<br> 
<p><?php echo"$hit->naim"; ?> </p>
<br> 


  <?php endforeach;?>
</div> 
 
    <div class="item">     
<br>

<?php foreach($hitz as $hit): ?>
 

  <h2><?php echo"$hit->naim"; ?></h2>
 


 <?php endforeach;?>

	



<br>			
<br>	
<br>	

<input class="icon"  value="" type="submit" style="background-image: url(/testzad1/frontend/web/img/pr.png);"/>  
<input class="icon2"  value="" type="submit" style="background-image: url(/testzad1/frontend/web/img/pr_mel.png);"/>  
	    </div>
		
		
   <div class="item">     
<img  width=100% src="/testzad1/frontend/web/img/fon.jpeg" alt="" />

  
	
 <a href=""><img src="/testzad1/frontend/web/img/elips.png" ></a>
 
<br>
<p> Инкогнито </p>
<br> 
<a href=""><img src="/testzad1/frontend/web/img/elips.png" ></a> 
<br>
<p>Только 18+</p><br> 
<a href=""><img src="/testzad1/frontend/web/img/elips.png" ></a>
<br>
<p>Работаем 24/7</p>

 
</div>
 
</div>



<div class="masonry2">
<div class="item"> 
<h1>Наши мастера</h1>
<div class="sliderbutton" id="slideleft" onclick="slideshow.move(-1)"></div>
		<div id="slider">
			<ul>
	  <?php foreach($hitm as $hitmas): ?>
     <?php $mainImg = $hitmas->getImage();?>
	 <?= Html::img($mainImg->getUrl('368x249'), ['alt' => $hitmas->name])?>
	<a href="<?= \yii\helpers\Url::to(['towar/view', 'id' => $hitmas->id]) ?>"><?= $hitmas->name?></a></p>
	   <?php endforeach;?>
			</ul>
		</div>
		<div class="sliderbutton" id="slideright" onclick="slideshow.move(1)"></div>
		<ul id="pagination" class="pagination">
			<li onclick="slideshow.pos(0)"></li>
			<li onclick="slideshow.pos(1)"></li>
			<li onclick="slideshow.pos(2)"></li>
			<li onclick="slideshow.pos(3)"></li>
			<li onclick="slideshow.pos(4)"></li>
			<li onclick="slideshow.pos(5)"></li>
			<li onclick="slideshow.pos(6)"></li>
		</ul>
	</div>
	</div>
</div> 

<div class="masonry3">
<div class="item"> 
<h1>Забронируйте время за 20 сек</h1>

<br>
<p>
И гарантировано получите скидку
</p>
<br>

<p> Введите имя:</p>
<p> Введите телефон:</p>
<input class="icon"  value="" type="submit" style="background-image: url(/testzad1/frontend/web/img/pr2.png);"/>
<input class="icon2"  value="" type="submit" style="background-image: url(/testzad1/frontend/web/img/pr2_mel.png);"/>
</div>
</div> 

