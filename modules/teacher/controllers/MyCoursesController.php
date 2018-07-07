<?php

namespace app\modules\teacher\controllers;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;


/**
 * CoursesController implements the CRUD actions for Courses model.
 */
class MyCoursesController extends Controller
{


    /**
     * Lists all Courses models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index');
    }


}
