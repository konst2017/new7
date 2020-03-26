<?php

/* @var $this yii\web\View */

$this->title = 'Админпанель';
?>
<div class="site-index">

   <div class="mainmenu hidden-sm hidden-xs">
								
						
		 <ul id="navbar">
      <li><a href="#">Главная</a></li>
      
      <li><a href="#">Соцсети</a>
        <ul>
		
		
         <li><a href="<?=\yii\helpers\Url::to(['sozseti/index']) ?>">Просмотр</a></li>
          
        </ul>
      </li>
	  
	   <li class="dropdown"><a href="#">Заголовок1<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?=\yii\helpers\Url::to(['zagol1/index']) ?>">Просмотр </a></li>
                                         
                                    </ul>
                                </li> 
     
	  
	    <li><a href="#">Mastera</a>
	  
	  <ul>
         <li><a href="<?=\yii\helpers\Url::to(['towar/index']) ?>">Просмотр</a></li>
          
        </ul>
	  </li>
	 
		  <li><a href="#">Заказы</a>
	  
	  <ul>
         <li><a href="<?=\yii\helpers\Url::to(['anketa/index']) ?>">Просмотр</a></li>
          
        </ul>
	  </li>						
	  
    </ul>	

						
						
							</div>

    </div>
</div>
