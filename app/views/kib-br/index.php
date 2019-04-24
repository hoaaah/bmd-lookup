<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ta Kib Brs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ta-kib-br-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ta Kib Br', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDPemda',
            'Kd_Id',
            'No_Urut',
            'Kd_Riwayat',
            'Kd_Prov',
            //'Kd_Kab_Kota',
            //'Kd_Bidang',
            //'Kd_Unit',
            //'Kd_Sub',
            //'Kd_UPB',
            //'Kd_Aset1',
            //'Kd_Aset2',
            //'Kd_Aset3',
            //'Kd_Aset4',
            //'Kd_Aset5',
            //'No_Register',
            //'Kd_Ruang',
            //'Kd_Pemilik',
            //'Tgl_Dokumen',
            //'No_Dokumen',
            //'Tgl_Perolehan',
            //'Tgl_Pembukuan',
            //'Merk',
            //'Type',
            //'CC',
            //'Bahan',
            //'Nomor_Pabrik',
            //'Nomor_Rangka',
            //'Nomor_Mesin',
            //'Nomor_Polisi',
            //'Nomor_BPKB',
            //'Asal_usul',
            //'Kondisi',
            //'Harga',
            //'Masa_Manfaat',
            //'Nilai_Sisa',
            //'Keterangan',
            //'Tahun',
            //'No_SP2D',
            //'No_ID',
            //'Kd_Kecamatan',
            //'Kd_Desa',
            //'Kd_Prov1',
            //'Kd_Kab_Kota1',
            //'Kd_Bidang1',
            //'Kd_Unit1',
            //'Kd_Sub1',
            //'Kd_UPB1',
            //'No_Register1',
            //'Invent',
            //'No_SKGuna',
            //'Kd_Penyusutan',
            //'Kd_Data',
            //'Kd_Alasan',
            //'Log_User',
            //'Log_entry',
            //'Nm_Rekanan',
            //'Alamat_Reakanan',
            //'Tgl_Mulai',
            //'Tgl_Selesai',
            //'Kd_KA',
            //'Kd_Koreksi',
            //'Dev_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
