<?php

namespace app\modules\teacher;

/**
 * teacher module definition class
 */
class Teacher extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\teacher\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->layout = '@app/modules/teacher/views/layouts/main';
        // custom initialization code goes here
    }
}
