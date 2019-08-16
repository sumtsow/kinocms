<?php

namespace app\controllers;

use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use app\models\Ticket;

/**
 * TicketController implements the CRUD actions for Ticket model.
 */
class TicketController extends \yii\rest\ActiveController
{
    /**
     * define Model for REST API
     */
    public $modelClass = 'app\models\Ticket';
    
    /**
     * Redefine inherited actions
     * @return array of Actions
     */    
    public function actions() {
        
        $actions = parent::actions();
        
        unset($actions['index'],  $actions['update']);
        
        return $actions;
    }
    
    /**
     * Increase  pagination page size limit to value defined in app/config/params.php as hallMaxSize
     * @return ActiveDataProvider
     */
    public function actionIndex(){
        
        return $activeData = new ActiveDataProvider([
            'query' => Ticket::find(),
            'pagination' => [
                'pageSizeLimit' => [1, \yii::$app->params['hallMaxSize']],
            ],
        ]);
        
    }
    
    
        /**
        * Updates an existing Ticket model state.
        * @param integer $id
        * @return ActiveDataProvider if success or
        * @throws NotFoundHttpException if the model cannot be found
        */
        public function actionUpdate($id)
        {
            $model = Ticket::findOne($id);
            
            $oldState = $model->state;
            
            $request = \Yii::$app->request->post();

            if ($model->load($request)) {
                
                $newState = $request['Ticket']['state'];
                
                if($oldState === 'free' && $newState === 'reserved' || $oldState === 'reserved' && $newState === 'saled' ) {
                    $model->save();
                }
                else {
                    throw new NotFoundHttpException('Operation failed. Requested ticket is not accessible. Choose other ticket.');
                }
            }

            return $this->redirect(['/tickets/' . $id]);
            }
}


