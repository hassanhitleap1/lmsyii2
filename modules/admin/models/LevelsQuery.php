<?php

namespace app\modules\admin\models;

/**
 * This is the ActiveQuery class for [[Levels]].
 *
 * @see Levels
 */
class LevelsQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Levels[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Levels|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
