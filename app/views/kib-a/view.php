<?php

use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TaKibA */
?>
<div class="ta-kib-a-view">
 
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IDPemda',
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
            'Kd_Pemilik',
            'Tgl_Perolehan',
            'Luas_M2',
            'Alamat',
            'Hak_Tanah',
            'Sertifikat_Tanggal',
            'Sertifikat_Nomor',
            'Penggunaan',
            'Asal_usul',
            'Harga',
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
