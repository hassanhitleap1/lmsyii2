<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%lessons}}".
 *
 * @property int $id
 * @property string $name_en
 * @property string $name_ar
 * @property string $desc_en
 * @property string $desc_ar
 * @property string $content
 * @property double $time
 * @property string $unit_id
 */
class Lessons extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%lessons}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time'], 'number'],
            [['unit_id'], 'integer'],
            [['name_en', 'name_ar'], 'string', 'max' => 255],
            [['desc_en', 'desc_ar', 'content'], 'string', 'max' => 200],
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
            'desc_en' => Yii::t('app', 'Desc En'),
            'desc_ar' => Yii::t('app', 'Desc Ar'),
            'content' => Yii::t('app', 'Content'),
            'time' => Yii::t('app', 'Time'),
            'unit_id' => Yii::t('app', 'Unit ID'),
        ];
    }

    /**
     * @inheritdoc
     * @return LessonsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LessonsQuery(get_called_class());
    }
}
