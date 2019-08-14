<?php

namespace app\controllers;

use yii\rest\ActiveController;

/**
 * TicketController implements RESTfull API actions for Ticket model.
 */
class TicketController extends ActiveController
{
     /**
     * {@inheritdoc}
     */
    public $modelClass = 'app\models\User';
}

