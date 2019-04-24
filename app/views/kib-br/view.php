<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TaKibBR */

$this->title = $model->IDPemda;
$this->params['breadcrumbs'][] = ['label' => 'Ta Kib Brs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ta-kib-br-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'IDPemda' => $model->IDPemda, 'Kd_Id' => $model->Kd_Id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'IDPemda' => $model->IDPemda, 'Kd_Id' => $model->Kd_Id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDPemda',
            'Kd_Id',
            'No_Urut',
            'Kd_Riwayat',
            'Kd_Prov',
            'Kd_Kab_Kota',
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
            'Kd_Ruang',
            'Kd_Pemilik',
            'Tgl_Dokumen',
            'No_Dokumen',
            'Tgl_Perolehan',
            'Tgl_Pembukuan',
            'Merk',
            'Type',
            'CC',
            'Bahan',
            'Nomor_Pabrik',
            'Nomor_Rangka',
            'Nomor_Mesin',
            'Nomor_Polisi',
            'Nomor_BPKB',
            'Asal_usul',
            'Kondisi',
            'Harga',
            'Masa_Manfaat',
            'Nilai_Sisa',
            'Keterangan',
            'Tahun',
            'No_SP2D',
            'No_ID',
            'Kd_Kecamatan',
            'Kd_Desa',
            'Kd_Prov1',
            'Kd_Kab_Kota1',
            'Kd_Bidang1',
            'Kd_Unit1',
            'Kd_Sub1',
            'Kd_UPB1',
            'No_Register1',
            'Invent',
            'No_SKGuna',
            'Kd_Penyusutan',
            'Kd_Data',
            'Kd_Alasan',
            'Log_User',
            'Log_entry',
            'Nm_Rekanan',
            'Alamat_Reakanan',
            'Tgl_Mulai',
            'Tgl_Selesai',
            'Kd_KA',
            'Kd_Koreksi',
            'Dev_ID',
        ],
    ]) ?>

</div>
