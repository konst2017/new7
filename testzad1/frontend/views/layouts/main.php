<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\data\Pagination;
use frontend\controllers\CategoryController;
AppAsset::register($this);
use yii\db\ActiveQuery;
use \frontend\models\Product;
use \frontend\models\Sozseti;
?>
<?php $this->beginPage() ?>
<script type="text/javascript">
function ValidMail() {
var re = /^[\wа-яА-Я]{1}[\w-\.а-яА-Я]*@[\w-а-яА-Я]+\.[a-zа-я]{2,4}$/i;   
var myMail = document.getElementById('email').value;
var valid = re.test(myMail);

if (valid) output = '<span style="color: green;">Адрес эл. почты введен правильно!</span>';
else output = '<span style="color: red;">Адрес электронной почты введен неправильно!</span>';

document.getElementById('message').innerHTML = output;
return valid;
}
  
</script>

<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
  
</head>

 <?php $this->beginBody()
    ?>
<body>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
	
<nav id="mainav" class="fl_right" >
	<div class="container">
		<div class="row">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs" href="">LOGO</a>
			</div>
			<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
				<ul class="nav navbar-nav">
<li>

<a class="logotip" href="<?= \yii\helpers\Url::home()?>"></a>

							
							
							</li>
				<li id="button_home" class="dropdown">
				
				<a href="<?= \yii\helpers\Url::home()?>">Главная</a>

					
				</li>	
				<li id="button_rubric" class="dropdown">
					<a class="dropdown-toggle" href="#" data-toggle="dropdown">
						Наши мастера
						<span class="caret"></span>
					</a>
					
						<ul>
			
     
    <li><a href="<?= \yii\helpers\Url::to(['/towar/index'])?>">Показ</a></li>
         


          </ul>
					
					
					
					
					
						</li>
						
			
				<li id="button_author" class="">
					<a href="#">
						Программы
						
					</a>
				</li>
				<li id="button_blog" class="">
					<a href="#">
						Акция
			
					</a>
				</li>
				<li id="button_articles" class="">
					<a href="#">
						Вакансии
						
					</a>
				</li>
				<li id="button_login" class="">
					<a href="#">
						Контакты
						
					</a>
				</li>
	<li>		
<input class="icon"  value="" type="submit" style="background-image: url(/testzad1/frontend/web/img/tel.png);"/>
<input class="icon2"  value="" type="submit" style="background-image: url(/testzad1/frontend/web/img/tel_mel.png);"/>
</li>

	<li id="button_rubric" class="dropdown">
					<a class="dropdown-toggle" href="#" data-toggle="dropdown">
						Пользователи
						<span class="caret"></span>
					</a>
					<ul>
			 <?php
			  if (Yii::$app->user->isGuest) {
				  ?>
     
    <li><a href="<?= \yii\helpers\Url::to(['/site/signup'])?>">Регистрация</a></li>
          <li> <a href="<?= \yii\helpers\Url::to(['http://localhost/testzad1/backend/web/index.php'], 'https')?>">Вход</a></li>


<?   }   
	 else {
		 ?>
      <li><a href="<?= \yii\helpers\Url::to(['/site/logout'])?>">Выход</a></li>
   

<?php   }	?> 
          </ul>
        </li>
				</ul>
			</div>
		</div>
	</div>
</nav>


  




 <?= $content ?>
 <div class="tooplate_footer">
       
        <div class="log"> 
		
			<ul class="nav navbar-nav">
<li>
<a class="logotip2" href="" width="30">     </a></li>

<a class="logotip3" href="" > 	</a>						
							
							
	</ul>	
		
		</div>
		
	<div class="log4">   Мужской СПА клуб  
<br>
@2019. Официальный сайт

	</div> 
		
<div class="log2">
Политика конфедициальности
 </div>
<div class="log3">
<?php
$hits = Sozseti::find()->all();
?>	

<?php foreach($hits as $hit): ?>
<?php $mainImg = $hit->getImage();?>				
						
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									
									<div class="support-text">
										
 <a href=" <?php  echo"$hit->adr"; ?>	"> <?= Html::img($mainImg->getUrl('32x32'), ['alt' => $hit->naim])?></a>
									
									</div>
								</div>
							</div>
						
							<?php endforeach;?>



          
        </div>
<script type="text/javascript">
var slideshow=new TINY.slider.slide('slideshow',{
	id:'slider',
	auto:4,
	resume:false,
	vertical:false,
	navid:'pagination',
	activeclass:'current',
	position:0,
	rewind:false,
	elastic:true,
	left:'slideleft',
	right:'slideright'
});
</script>		
	<?php $this->endBody() ?>	
</body>
</html>
<?php $this->endPage() ?>