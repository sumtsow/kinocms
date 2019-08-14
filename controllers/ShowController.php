<?php

namespace app\controllers;

use yii\rest\ActiveController;

/**
 * ShowController implements RESTfull API actions for Show model.
 */
class ShowController extends ActiveController
{
     /**
     * {@inheritdoc}
     */
    public $modelClass = 'app\models\Show';
}
