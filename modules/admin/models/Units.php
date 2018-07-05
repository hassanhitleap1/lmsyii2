<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%units}}".
 *
 * @property int $id
 * @property string $name_en
 * @property string $name_ar
 * @property string $desc_en
 * @property string $desc_ar
 * @property double $time
 * @property string $courses_id
 */
class Units extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%units}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time'], 'number'],
            [['courses_id'], 'integer'],
            [['name_en', 'name_ar'], 'string', 'max' => 255],
            [['desc_en', 'desc_ar'], 'string', 'max' => 200],
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
            'time' => Yii::t('app', 'Time'),
            'courses_id' => Yii::t('app', 'Courses ID'),
        ];
    }

    /**
     * @inheritdoc
     * @return UnitsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UnitsQuery(get_called_class());
    }
}
