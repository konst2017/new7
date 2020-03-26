<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mastera".
 *
 * @property int $id
 * @property string|null $im
 * @property string|null $img
 * @property int|null $wozr
 * @property int|null $wes
 * @property int|null $rost
 * @property int|null $grud
 */
class Mastera extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mastera';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'wozr', 'wes', 'rost', 'grud'], 'integer'],
            [['im', 'img'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'im' => 'Im',
            'img' => 'Img',
            'wozr' => 'Wozr',
            'wes' => 'Wes',
            'rost' => 'Rost',
            'grud' => 'Grud',
        ];
    }
}
