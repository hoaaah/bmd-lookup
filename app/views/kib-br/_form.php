<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TaKibBR */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ta-kib-br-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDPemda')->textInput() ?>

    <?= $form->field($model, 'Kd_Id')->textInput() ?>

    <?= $form->field($model, 'No_Urut')->textInput() ?>

    <?= $form->field($model, 'Kd_Riwayat')->textInput() ?>

    <?= $form->field($model, 'Kd_Prov')->textInput() ?>

    <?= $form->field($model, 'Kd_Kab_Kota')->textInput() ?>

    <?= $form->field($model, 'Kd_Bidang')->textInput() ?>

    <?= $form->field($model, 'Kd_Unit')->textInput() ?>

    <?= $form->field($model, 'Kd_Sub')->textInput() ?>

    <?= $form->field($model, 'Kd_UPB')->textInput() ?>

    <?= $form->field($model, 'Kd_Aset1')->textInput() ?>

    <?= $form->field($model, 'Kd_Aset2')->textInput() ?>

    <?= $form->field($model, 'Kd_Aset3')->textInput() ?>

    <?= $form->field($model, 'Kd_Aset4')->textInput() ?>

    <?= $form->field($model, 'Kd_Aset5')->textInput() ?>

    <?= $form->field($model, 'No_Register')->textInput() ?>

    <?= $form->field($model, 'Kd_Ruang')->textInput() ?>

    <?= $form->field($model, 'Kd_Pemilik')->textInput() ?>

    <?= $form->field($model, 'Tgl_Dokumen')->textInput() ?>

    <?= $form->field($model, 'No_Dokumen')->textInput() ?>

    <?= $form->field($model, 'Tgl_Perolehan')->textInput() ?>

    <?= $form->field($model, 'Tgl_Pembukuan')->textInput() ?>

    <?= $form->field($model, 'Merk')->textInput() ?>

    <?= $form->field($model, 'Type')->textInput() ?>

    <?= $form->field($model, 'CC')->textInput() ?>

    <?= $form->field($model, 'Bahan')->textInput() ?>

    <?= $form->field($model, 'Nomor_Pabrik')->textInput() ?>

    <?= $form->field($model, 'Nomor_Rangka')->textInput() ?>

    <?= $form->field($model, 'Nomor_Mesin')->textInput() ?>

    <?= $form->field($model, 'Nomor_Polisi')->textInput() ?>

    <?= $form->field($model, 'Nomor_BPKB')->textInput() ?>

    <?= $form->field($model, 'Asal_usul')->textInput() ?>

    <?= $form->field($model, 'Kondisi')->textInput() ?>

    <?= $form->field($model, 'Harga')->textInput() ?>

    <?= $form->field($model, 'Masa_Manfaat')->textInput() ?>

    <?= $form->field($model, 'Nilai_Sisa')->textInput() ?>

    <?= $form->field($model, 'Keterangan')->textInput() ?>

    <?= $form->field($model, 'Tahun')->textInput() ?>

    <?= $form->field($model, 'No_SP2D')->textInput() ?>

    <?= $form->field($model, 'No_ID')->textInput() ?>

    <?= $form->field($model, 'Kd_Kecamatan')->textInput() ?>

    <?= $form->field($model, 'Kd_Desa')->textInput() ?>

    <?= $form->field($model, 'Kd_Prov1')->textInput() ?>

    <?= $form->field($model, 'Kd_Kab_Kota1')->textInput() ?>

    <?= $form->field($model, 'Kd_Bidang1')->textInput() ?>

    <?= $form->field($model, 'Kd_Unit1')->textInput() ?>

    <?= $form->field($model, 'Kd_Sub1')->textInput() ?>

    <?= $form->field($model, 'Kd_UPB1')->textInput() ?>

    <?= $form->field($model, 'No_Register1')->textInput() ?>

    <?= $form->field($model, 'Invent')->textInput() ?>

    <?= $form->field($model, 'No_SKGuna')->textInput() ?>

    <?= $form->field($model, 'Kd_Penyusutan')->textInput() ?>

    <?= $form->field($model, 'Kd_Data')->textInput() ?>

    <?= $form->field($model, 'Kd_Alasan')->textInput() ?>

    <?= $form->field($model, 'Log_User')->textInput() ?>

    <?= $form->field($model, 'Log_entry')->textInput() ?>

    <?= $form->field($model, 'Nm_Rekanan')->textInput() ?>

    <?= $form->field($model, 'Alamat_Reakanan')->textInput() ?>

    <?= $form->field($model, 'Tgl_Mulai')->textInput() ?>

    <?= $form->field($model, 'Tgl_Selesai')->textInput() ?>

    <?= $form->field($model, 'Kd_KA')->textInput() ?>

    <?= $form->field($model, 'Kd_Koreksi')->textInput() ?>

    <?= $form->field($model, 'Dev_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
