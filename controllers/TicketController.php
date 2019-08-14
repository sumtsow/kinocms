<?php

namespace app\controllers;

use yii\rest\ActiveController;
use yii\data\ActiveDataProvider;
use app\models\Ticket;

/**
 * TicketController implements RESTfull API actions for Ticket model.
 */
class TicketController extends ActiveController
{
     /**
     * {@inheritdoc}
     */
    public $modelClass = 'app\models\Ticket';
    
    public function actions() {
        $actions = parent::actions();
        unset($actions['index']);
        return $actions;
    }
    
    public function actionIndex(){
    $activeData = new ActiveDataProvider([
        'query' => Ticket::find(),
        'pagination' => [
            'PageSize' => \yii::$app->params['hallMaxSize'],
        ],
    ]);
    return $activeData;
}
}

