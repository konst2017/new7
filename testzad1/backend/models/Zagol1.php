<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "zagol1".
 *
 * @property string|null $naim
 * @property int $id
 */
class Zagol1 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zagol1';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naim'], 'string'],
            [['id'], 'required'],
            [['id'], 'integer'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'naim' => 'Naim',
            'id' => 'ID',
        ];
    }
}
