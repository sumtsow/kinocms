<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ticket */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ticket-form">

    <?php
        $form = ActiveForm::begin([
             'action' => '/tickets/2',
            'options' => [
                'enctype' => 'multipart/form-data',
            ],
        ])
    ?>

    <?= $form->field($model, 'id')->textInput(['readonly' => 'readonly', 'value' => 2]) ?>

    <?= $form->field($model, 'row')->textInput(['readonly' => 'readonly', 'value' => 1]) ?>

    <?= $form->field($model, 'place')->textInput(['readonly' => 'readonly', 'value' => 2]) ?>

    <?= $form->field($model, 'cost')->textInput(['readonly' => 'readonly', 'value' => 55]) ?>

    <?= $form->field($model, 'state')->dropDownList([ 'free' => 'Free', 'reserved' => 'Reserved', 'saled' => 'Saled'], ['prompt' => 'Select sate...']) ?>

    <?= $form->field($model, 'reservation_expiration')->input('datetime', ['readonly' => 'readonly']) ?>
    
   
    
    <input type="hidden" name="_method" id="_method" value="patch">

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
