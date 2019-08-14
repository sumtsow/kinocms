<?php

namespace app\controllers;

use yii\rest\ActiveController;

/**
 * CinemaController implements RESTfull API actions for Cinema model.
 */
class CinemaController extends ActiveController
{
    /**
     * {@inheritdoc}
     */
    public $modelClass = 'app\models\Cinema';

}
