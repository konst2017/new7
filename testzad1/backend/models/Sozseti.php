<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sozseti".
 *
 * @property int $id
 * @property string|null $naim
 * @property string|null $adr
 */
class Sozseti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */


 public $image;
    

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
            [['id'], 'required'],
            [['id'], 'integer'],
            [['naim', 'adr'], 'string', 'max' => 255],
            [['image'], 'file', 'extensions' => 'png, jpg'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'id',
            'naim' => 'Naim',
            'image' => 'Ôîòî',
            'adr' => 'Adr',
        ];
    }

 public function upload(){
        if($this->validate()){
            $path = '../../frontend/web/upload/store/' . $this->image->baseName . '.' . $this->image->extension;
            $this->image->saveAs($path);
            $this->attachImage($path, true);
            @unlink($path);
            return true;
        }else{
            return false;
        }
    }


}
