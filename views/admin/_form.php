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
            'options' => [
                'enctype' => 'multipart/form-data',
            ],
        ])
    ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'row')->textInput() ?>

    <?= $form->field($model, 'place')->textInput() ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'state')->dropDownList([ 'free' => 'Free', 'reserved' => 'Reserved', 'saled' => 'Saled',], ['prompt' => 'Select sate...']) ?>

    <?= $form->field($model, 'reservation_expiration')->input('datetime') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
