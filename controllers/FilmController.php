<?php

namespace app\controllers;

use yii\rest\ActiveController;

/**
 * FilmController implements RESTfull API actions for Film model.
 */
class FilmController extends ActiveController
{
     /**
     * {@inheritdoc}
     */
    public $modelClass = 'app\models\Film';
}
