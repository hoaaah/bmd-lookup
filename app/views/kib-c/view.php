<?php

use yii\widgets\DetailView;
use kartik\grid\GridView;
use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TaKibB */
?>
<div class="ta-kib-b-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Tahun',
            'IDPemda',
            'No_Register',
            'kdUPB.Nm_UPB',
            'Tgl_Perolehan',
            'Kondisi',
            'Harga:decimal',
            'Masa_Manfaat:decimal',
            'Nilai_Sisa',
            'Keterangan',
            'Tgl_Pembukuan',
        ],
    ]) ?>


    <?=GridView::widget([
        'dataProvider' => $dataProvider,
        'pjax'=>true,
        'columns' => [
            'riwayat.Nm_Riwayat',
            'kdUPB.Nm_UPB',
            'No_Register',
            'Tgl_Perolehan',
            'Tgl_Pembukuan',
            'Kondisi',
            'Masa_Manfaat:decimal',
            'Harga:decimal',
            'Keterangan',
            [
                'class' => 'kartik\grid\ActionColumn',
                'controller' => 'kib-br',
                'template' => '{delete}',
                'dropdown' => false,
                'vAlign'=>'middle',
            ],
        ],
        'striped' => true,
        'condensed' => true,
        'responsive' => true,          
        'panel' => [
            'type' => 'primary', 
            'heading' => '<i class="glyphicon glyphicon-list"></i> Riwayat Aset',
        ]
    ])?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDPemda',
            // 'Kd_Prov',
            // 'Kd_Kab_Kota',
            // 'Kd_Bidang',
            // 'Kd_Unit',
            // 'Kd_Sub',
            // 'Kd_UPB',
            // 'Kd_Aset1',
            // 'Kd_Aset2',
            // 'Kd_Aset3',
            // 'Kd_Aset4',
            // 'Kd_Aset5',
            'No_Register',
            // 'Kd_Ruang',
            // 'Kd_Pemilik',
            // 'Merk',
            // 'Type',
            // 'CC',
            // 'Bahan',
            // 'Tgl_Perolehan',
            // 'Nomor_Pabrik',
            // 'Nomor_Rangka',
            // 'Nomor_Mesin',
            // 'Nomor_Polisi',
            // 'Nomor_BPKB',
            'Asal_usul',
            'Kondisi',
            'Harga:decimal',
            'Masa_Manfaat:decimal',
            'Nilai_Sisa',
            'Keterangan',
            'Tahun',
            'No_SP2D',
            'No_ID',
            'Tgl_Pembukuan',
            'Kd_Kecamatan',
            'Kd_Desa',
            'Invent',
            'No_SKGuna',
            'Kd_Penyusutan',
            'Kd_Data',
            'Log_User',
            'Log_entry',
            'Kd_Masalah',
            'Ket_Masalah',
            'Kd_KA',
            'No_SIPPT',
            'Dev_Id',
            'Kd_Hapus',
        ],
    ]) ?>      
</div>
