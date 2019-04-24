<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TaKibBR */

$this->title = 'Create Ta Kib Br';
$this->params['breadcrumbs'][] = ['label' => 'Ta Kib Brs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ta-kib-br-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
