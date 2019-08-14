<?php

namespace app\controllers;

use yii\rest\ActiveController;

/**
 * RowController implements RESTfull API actions for Row model.
 */
class RowController extends ActiveController
{
     /**
     * {@inheritdoc}
     */
    public $modelClass = 'app\models\Row';
}
