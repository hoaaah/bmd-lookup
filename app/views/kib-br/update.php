<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TaKibBR */

$this->title = 'Update Ta Kib Br: ' . $model->IDPemda;
$this->params['breadcrumbs'][] = ['label' => 'Ta Kib Brs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IDPemda, 'url' => ['view', 'IDPemda' => $model->IDPemda, 'Kd_Id' => $model->Kd_Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ta-kib-br-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
