<?php

/* @var $this yii\web\View */

$this->title = 'Avada Media Test Task';
?>
<div class="site-index">
    <h1>REST API Test Page</h1>
    <h3>GET</h3>
    <p><a href='/tickets?per-page=150'>GET all tickets</a></p>
    <p><a href='/tickets'>GET all tickets (paginated)</a></p>
    <p><a href='/tickets/2'>GET single ticket #2</a></p>
    <h3>PUT</h3>
    
    <!-- PUT method form -->
    <?= $this->render('_form.php', [
        'model' => $model,
        'options' => [
            'class' => 'form',
        ],
    ]) ?>
    
</div>
