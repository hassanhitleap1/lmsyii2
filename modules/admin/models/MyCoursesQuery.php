<?php

namespace app\modules\admin\models;

/**
 * This is the ActiveQuery class for [[MyCourses]].
 *
 * @see MyCourses
 */
class MyCoursesQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return MyCourses[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return MyCourses|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
