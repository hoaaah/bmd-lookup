<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TaKibA */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ta-kib-a-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDPemda')->textInput() ?>

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

    <?= $form->field($model, 'Kd_Pemilik')->textInput() ?>

    <?= $form->field($model, 'Tgl_Perolehan')->textInput() ?>

    <?= $form->field($model, 'Luas_M2')->textInput() ?>

    <?= $form->field($model, 'Alamat')->textInput() ?>

    <?= $form->field($model, 'Hak_Tanah')->textInput() ?>

    <?= $form->field($model, 'Sertifikat_Tanggal')->textInput() ?>

    <?= $form->field($model, 'Sertifikat_Nomor')->textInput() ?>

    <?= $form->field($model, 'Penggunaan')->textInput() ?>

    <?= $form->field($model, 'Asal_usul')->textInput() ?>

    <?= $form->field($model, 'Harga')->textInput() ?>

    <?= $form->field($model, 'Keterangan')->textInput() ?>

    <?= $form->field($model, 'Tahun')->textInput() ?>

    <?= $form->field($model, 'No_SP2D')->textInput() ?>

    <?= $form->field($model, 'No_ID')->textInput() ?>

    <?= $form->field($model, 'Tgl_Pembukuan')->textInput() ?>

    <?= $form->field($model, 'Kd_Kecamatan')->textInput() ?>

    <?= $form->field($model, 'Kd_Desa')->textInput() ?>

    <?= $form->field($model, 'Invent')->textInput() ?>

    <?= $form->field($model, 'No_SKGuna')->textInput() ?>

    <?= $form->field($model, 'Kd_Penyusutan')->textInput() ?>

    <?= $form->field($model, 'Kd_Data')->textInput() ?>

    <?= $form->field($model, 'Log_User')->textInput() ?>

    <?= $form->field($model, 'Log_entry')->textInput() ?>

    <?= $form->field($model, 'Kd_Masalah')->textInput() ?>

    <?= $form->field($model, 'Ket_Masalah')->textInput() ?>

    <?= $form->field($model, 'Kd_KA')->textInput() ?>

    <?= $form->field($model, 'No_SIPPT')->textInput() ?>

    <?= $form->field($model, 'Dev_Id')->textInput() ?>

    <?= $form->field($model, 'Kd_Hapus')->textInput() ?>

  
	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
