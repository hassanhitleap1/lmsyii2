<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "{{%my_courses}}".
 *
 * @property int $id
 * @property string $course_id
 * @property string $user_id
 * @property string $buy_date
 * @property string $expiry_date
 * @property int $status
 */
class MyCourses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%my_courses}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['course_id', 'user_id', 'status'], 'integer'],
            [['buy_date', 'expiry_date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'course_id' => Yii::t('app', 'Course ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'buy_date' => Yii::t('app', 'Buy Date'),
            'expiry_date' => Yii::t('app', 'Expiry Date'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @inheritdoc
     * @return MyCoursesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MyCoursesQuery(get_called_class());
    }
}
