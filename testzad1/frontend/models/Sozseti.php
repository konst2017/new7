<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sozseti".
 *
 * @property int $num
 * @property string|null $naim
 * @property string|null $adr
 */
class Sozseti extends \yii\db\ActiveRecord
{
   public function behaviors()
  
  {
        
return [
  
       'image' => [
'class' => 'rico\yii2images\behaviors\ImageBehave',
       
]
 
       ];
   
  }  
	 
    public static function tableName()
    {
        return 'sozseti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num'], 'required'],
            [['num'], 'integer'],
            [['naim', 'adr'], 'string', 'max' => 255],
            [['num'], 'unique'],
			[['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'num' => 'Num',
            'naim' => 'Naim',
            'adr' => 'Adr',
			 'img' => 'Img'
        ];
    }
}
