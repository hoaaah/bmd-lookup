<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Modal;
use kartik\grid\GridView;
use johnitvn\ajaxcrud\CrudAsset; 
use johnitvn\ajaxcrud\BulkButtonWidget;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TaKibASearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Permasalahan 2';
$this->params['breadcrumbs'][] = $this->title;

CrudAsset::register($this);

?>
<div class="ta-kib-a-index">
    <div id="ajaxCrudDatatable">
        <?=GridView::widget([
            'id'=>'crud-datatable',
            'dataProvider' => $dataProvider,
            'pjax'=>true,
            'columns' => [
                [
                    'class' => 'kartik\grid\SerialColumn',
                    'width' => '30px',
                ],
                'Kd_Bidang',
                'Kd_Unit',
                'Kd_Sub',
                'Kd_UPB',
                'Kd_Aset1',
                'Kd_Aset2',
                'Kd_Aset3',
                'Kd_Aset4',
                'Kd_Aset5',
                'No_Register',
                'jumlah'
            ],
            'toolbar'=> [
                [
                    'content'=>
                        Html::a('<i class="glyphicon glyphicon-repeat"></i>', [''],
                        ['data-pjax'=>1, 'class'=>'btn btn-default', 'title'=>'Reset Grid']).
                        '{toggleData}'.
                        '{export}'
                ],
            ],          
            'striped' => true,
            'condensed' => true,
            'responsive' => true,          
            'panel' => [
                'type' => 'primary', 
                'heading' => 'Permasalahan 2: No Register Asset Dobel',
                'before'=>'<em>* Solusi: Perbaikan Fungsi Perhitungan, ubah data no_register dengan data baru.</em>',
            ]
        ])?>
    </div>
</div>
<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin
])?>
<?php Modal::end(); ?>
