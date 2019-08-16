<?php

/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = 'Register User';
?>
<h2 class="text-center">Register User</h2>
<div class="login-box-body" style="max-width: 40em; margin: auto;">
    <div class="user-create">

        <?= $this->render('_form', [
            'model' => $model,
        ]) ?>
    </div>
</div>

