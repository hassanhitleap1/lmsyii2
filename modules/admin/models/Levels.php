<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%levels}}".
 *
 * @property int $id
 * @property string $name_en
 * @property string $name_ar
 * @property int $order
 */
class Levels extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%levels}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order'], 'required'],
            [['order'], 'integer'],
            [['name_en', 'name_ar'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_en' => Yii::t('app', 'Name En'),
            'name_ar' => Yii::t('app', 'Name Ar'),
            'order' => Yii::t('app', 'Order'),
        ];
    }

    /**
     * @inheritdoc
     * @return LevelsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LevelsQuery(get_called_class());
    }
}
