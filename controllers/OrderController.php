<?php

namespace app\controllers;

use yii\rest\ActiveController;

/**
 * OrderController implements RESTfull API actions for Order model.
 */
class OrderController extends ActiveController
{
     /**
     * {@inheritdoc}
     */
    public $modelClass = 'app\models\Order';
}

