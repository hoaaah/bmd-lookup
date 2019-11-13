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

$this->title = 'Permasalahan 8';
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
                'IDPemda',
                'Kd_Id',
                'No_Urut',
                'Kd_Riwayat',
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
                'Kd_Pemilik',
                'Tgl_Dokumen:date',
                'No_Dokumen',
                'Tgl_Perolehan:date',
                'Tgl_Pembukuan:date',
                'harga:decimal'
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
                'heading' => 'Permasalahan 8: Kode KA KIB berbeda dengan kode KA di riwayat.',
                'before'=>'<em>* Solusi: Penyesuaian Kd KA di riwayat.</em>',
            ]
        ])?>
    </div>
</div>
<?php Modal::begin([
    "id"=>"ajaxCrudModal",
    "footer"=>"",// always need it for jquery plugin
])?>
<?php Modal::end(); ?>
