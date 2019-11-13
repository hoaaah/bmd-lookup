<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Hi!</h1>

        <p class="lead">Aplikasi ini hanya untuk administrator, jangan dipake buat yang bukan admin ya.</p>

        <p><?= "Created and maintained by:" . Html::a('@hoaaah', 'https://belajararief.com', ['class' => 'btn btn-xs btn-success', 'target' => '_BLANK']) ?></p>
    </div>
</div>
