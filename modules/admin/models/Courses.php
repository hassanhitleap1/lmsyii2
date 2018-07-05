<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%courses}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $teacher_id
 * @property string $level_id
 * @property double $time
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%courses}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teacher_id', 'level_id'], 'integer'],
            [['time'], 'number'],
            [['name'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'teacher_id' => Yii::t('app', 'Teacher ID'),
            'level_id' => Yii::t('app', 'Level ID'),
            'time' => Yii::t('app', 'Time'),
        ];
    }

    /**
     * @inheritdoc
     * @return CoursesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CoursesQuery(get_called_class());
    }
}
