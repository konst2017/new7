<?php

/* @var $this yii\web\View */

use yii\data\Pagination;
use app\models\Category;
use app\models\Product;
use yii\widgets\ActiveForm;
use app\models\Logo;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;
use app\controllers\CategoryController;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;

$this->title = 'My Yii Application';

?>


 			
		<!-- START PAGE-CONTENT -->
		
		<?php if( !empty($hits) ): ?>

    <h2 class="title text-center">Наши мастера</h2>
    <?php foreach($hits as $hit): ?>
    <?php $mainImg = $hit->getImage();?>
   
        <div class="product-image-wrapper">
            <div class="single-products">
		

                <div class="productinfo text-center">
                    <?= Html::img($mainImg->getUrl('268x249'), ['alt' => $hit->name])?>
                  
                    <p>
					 
					
					<a href="<?= \yii\helpers\Url::to(['towar/view', 'id' => $hit->id]) ?>"><?= $hit->name?></a></p>
                   
                </div>
              
            </div>
            
        </div>
   
    <?php endforeach;?>

<?php endif; ?>

	