<?php

namespace app\controllers;

use yii\rest\ActiveController;

/**
 * UserController implements RESTfull API actions for User model.
 */
class UserController extends ActiveController
{
     /**
     * {@inheritdoc}
     */
    public $modelClass = 'app\models\User';
}
