<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2; // or kartik\select2\Select2
use yii\web\JsExpression;


$url = \yii\helpers\Url::to(['/site/cari-unit']);

?>

<div class="ta-kib-a-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php
        $data =  Yii::$app->db->createCommand("
            SELECT a.kode AS id, Nm_Unit AS text FROM
            (
            SELECT RIGHT('0'+CONVERT(VARCHAR(3), a.Kd_Bidang, 0),2) + '.' + RIGHT('0'+CONVERT(VARCHAR(3), a.Kd_Unit, 0),2) AS Kode, RIGHT('0'+CONVERT(VARCHAR(3), a.Kd_Bidang, 0),2) + '.' + RIGHT('0'+CONVERT(VARCHAR(3), a.Kd_Unit, 0),2) + ' ' + a.Nm_Unit AS Nm_Unit
            FROM Ref_Unit a
            ) a
        ")->queryAll();
        echo $form->field($model, 'kodeUnit')->widget(Select2::class, [
            // 'initValueText' => $cityDesc, // set the initial display text
            'data' => \yii\Helpers\ArrayHelper::map($data, 'id', 'text'),
            'options' => ['placeholder' => 'Organisasi Perangkat Daerah', 'onchange'=> 'this.form.submit()'],
        'pluginOptions' => [
            'allowClear' => true,
            'minimumInputLength' => 3,
            'language' => [
                'errorLoading' => new JsExpression("function () { return 'Waiting for results...'; }"),
            ],
            'ajax' => [
                'url' => $url,
                'dataType' => 'json',
                'data' => new JsExpression('function(params) { return {q:params.term}; }')
            ],
            'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
            'templateResult' => new JsExpression('function(city) { return city.text; }'),
            'templateSelection' => new JsExpression('function (city) { return city.text; }'),
        ],
        ])->label(false);    
    ?>

    <?php ActiveForm::end(); ?>

</div>