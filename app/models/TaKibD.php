<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ta_KIB_D".
 *
 * @property string $IDPemda
 * @property int $Kd_Prov
 * @property int $Kd_Kab_Kota
 * @property int $Kd_Bidang
 * @property int $Kd_Unit
 * @property int $Kd_Sub
 * @property int $Kd_UPB
 * @property int $Kd_Aset1
 * @property int $Kd_Aset2
 * @property int $Kd_Aset3
 * @property int $Kd_Aset4
 * @property int $Kd_Aset5
 * @property int $No_Register
 * @property int $Kd_Pemilik
 * @property string $Tgl_Perolehan
 * @property string $Konstruksi
 * @property double $Panjang
 * @property double $Lebar
 * @property double $Luas
 * @property string $Lokasi
 * @property string $Dokumen_Tanggal
 * @property string $Dokumen_Nomor
 * @property string $Status_Tanah
 * @property int $Kd_Tanah1
 * @property int $Kd_Tanah2
 * @property int $Kd_Tanah3
 * @property int $Kd_Tanah4
 * @property int $Kd_Tanah5
 * @property int $Kode_Tanah
 * @property string $Asal_usul
 * @property string $Kondisi
 * @property string $Harga
 * @property int $Masa_Manfaat
 * @property string $Nilai_Sisa
 * @property string $Keterangan
 * @property int $Tahun
 * @property string $No_SP2D
 * @property int $No_ID
 * @property string $Tgl_Pembukuan
 * @property int $Kd_Kecamatan
 * @property int $Kd_Desa
 * @property int $Invent
 * @property string $No_SKGuna
 * @property int $Kd_Penyusutan
 * @property int $Kd_Data
 * @property string $Log_User
 * @property string $Log_entry
 * @property int $Kd_KA
 * @property string $No_SIPPT
 * @property int $Dev_Id
 * @property int $Kd_Hapus
 *
 * @property TaFotoD[] $taFotoDs
 * @property RefPemilik $kdPemilik
 * @property RefRekAset5 $kdAset5
 * @property RefPemda $kdKabKota
 * @property RefUPB $kdUPB
 * @property TaKIBDHapus $taKIBDHapus
 * @property TaKIBDR[] $taKIBDRs
 * @property TaSusutD[] $taSusutDs
 */
class TaKibD extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Ta_KIB_D';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPemda', 'Kd_Prov', 'Kd_Kab_Kota', 'Kd_Bidang', 'Kd_Unit', 'Kd_Sub', 'Kd_UPB', 'Kd_Aset1', 'Kd_Aset2', 'Kd_Aset3', 'Kd_Aset4', 'Kd_Aset5', 'No_Register', 'Kd_Pemilik', 'Tgl_Perolehan', 'Asal_usul', 'Kondisi', 'Harga', 'Kd_Hapus'], 'required'],
            [['IDPemda', 'Konstruksi', 'Lokasi', 'Dokumen_Nomor', 'Status_Tanah', 'Asal_usul', 'Kondisi', 'Keterangan', 'No_SP2D', 'No_SKGuna', 'Log_User', 'No_SIPPT'], 'string'],
            [['Kd_Prov', 'Kd_Kab_Kota', 'Kd_Bidang', 'Kd_Unit', 'Kd_Sub', 'Kd_UPB', 'Kd_Aset1', 'Kd_Aset2', 'Kd_Aset3', 'Kd_Aset4', 'Kd_Aset5', 'No_Register', 'Kd_Pemilik', 'Kd_Tanah1', 'Kd_Tanah2', 'Kd_Tanah3', 'Kd_Tanah4', 'Kd_Tanah5', 'Kode_Tanah', 'Masa_Manfaat', 'Tahun', 'No_ID', 'Kd_Kecamatan', 'Kd_Desa', 'Invent', 'Kd_Penyusutan', 'Kd_Data', 'Kd_KA', 'Dev_Id', 'Kd_Hapus'], 'integer'],
            [['Tgl_Perolehan', 'Dokumen_Tanggal', 'Tgl_Pembukuan', 'Log_entry'], 'safe'],
            [['Panjang', 'Lebar', 'Luas', 'Harga', 'Nilai_Sisa'], 'number'],
            [['IDPemda'], 'unique'],
            [['Kd_Pemilik'], 'exist', 'skipOnError' => true, 'targetClass' => RefPemilik::className(), 'targetAttribute' => ['Kd_Pemilik' => 'Kd_Pemilik']],
            [['Kd_Aset5'], 'exist', 'skipOnError' => true, 'targetClass' => RefRekAset5::className(), 'targetAttribute' => ['Kd_Aset5' => 'Kd_Aset5']],
            [['Kd_Kab_Kota'], 'exist', 'skipOnError' => true, 'targetClass' => RefPemda::className(), 'targetAttribute' => ['Kd_Kab_Kota' => 'Kd_Kab_Kota']],
            [['Kd_UPB'], 'exist', 'skipOnError' => true, 'targetClass' => RefUPB::className(), 'targetAttribute' => ['Kd_UPB' => 'Kd_UPB']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDPemda' => 'Id Pemda',
            'Kd_Prov' => 'Kd Prov',
            'Kd_Kab_Kota' => 'Kd Kab Kota',
            'Kd_Bidang' => 'Kd Bidang',
            'Kd_Unit' => 'Kd Unit',
            'Kd_Sub' => 'Kd Sub',
            'Kd_UPB' => 'Kd Upb',
            'Kd_Aset1' => 'Kd Aset1',
            'Kd_Aset2' => 'Kd Aset2',
            'Kd_Aset3' => 'Kd Aset3',
            'Kd_Aset4' => 'Kd Aset4',
            'Kd_Aset5' => 'Kd Aset5',
            'No_Register' => 'No Register',
            'Kd_Pemilik' => 'Kd Pemilik',
            'Tgl_Perolehan' => 'Tgl Perolehan',
            'Konstruksi' => 'Konstruksi',
            'Panjang' => 'Panjang',
            'Lebar' => 'Lebar',
            'Luas' => 'Luas',
            'Lokasi' => 'Lokasi',
            'Dokumen_Tanggal' => 'Dokumen Tanggal',
            'Dokumen_Nomor' => 'Dokumen Nomor',
            'Status_Tanah' => 'Status Tanah',
            'Kd_Tanah1' => 'Kd Tanah1',
            'Kd_Tanah2' => 'Kd Tanah2',
            'Kd_Tanah3' => 'Kd Tanah3',
            'Kd_Tanah4' => 'Kd Tanah4',
            'Kd_Tanah5' => 'Kd Tanah5',
            'Kode_Tanah' => 'Kode Tanah',
            'Asal_usul' => 'Asal Usul',
            'Kondisi' => 'Kondisi',
            'Harga' => 'Harga',
            'Masa_Manfaat' => 'Masa Manfaat',
            'Nilai_Sisa' => 'Nilai Sisa',
            'Keterangan' => 'Keterangan',
            'Tahun' => 'Tahun',
            'No_SP2D' => 'No Sp2 D',
            'No_ID' => 'No ID',
            'Tgl_Pembukuan' => 'Tgl Pembukuan',
            'Kd_Kecamatan' => 'Kd Kecamatan',
            'Kd_Desa' => 'Kd Desa',
            'Invent' => 'Invent',
            'No_SKGuna' => 'No Sk Guna',
            'Kd_Penyusutan' => 'Kd Penyusutan',
            'Kd_Data' => 'Kd Data',
            'Log_User' => 'Log User',
            'Log_entry' => 'Log Entry',
            'Kd_KA' => 'Kd Ka',
            'No_SIPPT' => 'No Sippt',
            'Dev_Id' => 'Dev ID',
            'Kd_Hapus' => 'Kd Hapus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaFotoDs()
    {
        return $this->hasMany(TaFotoD::className(), ['IDPemda' => 'IDPemda']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdPemilik()
    {
        return $this->hasOne(RefPemilik::className(), ['Kd_Pemilik' => 'Kd_Pemilik']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdAset5()
    {
        return $this->hasOne(RefRekAset5::className(), ['Kd_Aset1' => 'Kd_Aset1', 'Kd_Aset2' => 'Kd_Aset2', 'Kd_Aset3' => 'Kd_Aset3', 'Kd_Aset4' => 'Kd_Aset4', 'Kd_Aset5' => 'Kd_Aset5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdKabKota()
    {
        return $this->hasOne(RefPemda::className(), ['Kd_Kab_Kota' => 'Kd_Kab_Kota']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdUPB()
    {
        return $this->hasOne(RefUPB::className(), ['Kd_UPB' => 'Kd_UPB']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBDHapus()
    {
        return $this->hasOne(TaKIBDHapus::className(), ['IDPemda' => 'IDPemda']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBDRs()
    {
        return $this->hasMany(TaKIBDR::className(), ['IDPemda' => 'IDPemda']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaSusutDs()
    {
        return $this->hasMany(TaSusutD::className(), ['IDPemda' => 'IDPemda']);
    }

    
    public function getKdAset4()
    {
        return $this->hasOne(RefRekAset4::className(), ['Kd_Aset1' => 'Kd_Aset1', 'Kd_Aset2' => 'Kd_Aset2', 'Kd_Aset3' => 'Kd_Aset3', 'Kd_Aset4' => 'Kd_Aset4']);
    }

    public function getKdAset3()
    {
        return $this->hasOne(RefRekAset3::className(), ['Kd_Aset1' => 'Kd_Aset1', 'Kd_Aset2' => 'Kd_Aset2', 'Kd_Aset3' => 'Kd_Aset3']);
    }

    public function getKdAset2()
    {
        return $this->hasOne(RefRekAset2::className(), ['Kd_Aset1' => 'Kd_Aset1', 'Kd_Aset2' => 'Kd_Aset2']);
    }


    public function getKdAset1()
    {
        return $this->hasOne(RefRekAset1::className(), ['Kd_Aset1' => 'Kd_Aset1']);
    }



}
