<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ta_KIB_F".
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
 * @property string $Bertingkat_Tidak
 * @property string $Beton_tidak
 * @property double $Panjang
 * @property double $Lebar
 * @property double $Luas_Lantai
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
 * @property string $Keterangan
 * @property string $Tgl_Pembukuan
 * @property int $Kd_Kecamatan
 * @property int $Kd_Desa
 * @property int $Invent
 * @property int $Kd_Hapus
 *
 * @property RefPemilik $kdPemilik
 * @property RefRekAset5 $kdAset5
 * @property RefPemda $kdKabKota
 * @property RefUPB $kdUPB
 */
class TaKibF extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Ta_KIB_F';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPemda', 'Kd_Prov', 'Kd_Kab_Kota', 'Kd_Bidang', 'Kd_Unit', 'Kd_Sub', 'Kd_UPB', 'Kd_Aset1', 'Kd_Aset2', 'Kd_Aset3', 'Kd_Aset4', 'Kd_Aset5', 'No_Register', 'Kd_Pemilik', 'Asal_usul', 'Kondisi', 'Harga', 'Kd_Hapus'], 'required'],
            [['IDPemda', 'Bertingkat_Tidak', 'Beton_tidak', 'Lokasi', 'Dokumen_Nomor', 'Status_Tanah', 'Asal_usul', 'Kondisi', 'Keterangan'], 'string'],
            [['Kd_Prov', 'Kd_Kab_Kota', 'Kd_Bidang', 'Kd_Unit', 'Kd_Sub', 'Kd_UPB', 'Kd_Aset1', 'Kd_Aset2', 'Kd_Aset3', 'Kd_Aset4', 'Kd_Aset5', 'No_Register', 'Kd_Pemilik', 'Kd_Tanah1', 'Kd_Tanah2', 'Kd_Tanah3', 'Kd_Tanah4', 'Kd_Tanah5', 'Kode_Tanah', 'Kd_Kecamatan', 'Kd_Desa', 'Invent', 'Kd_Hapus'], 'integer'],
            [['Tgl_Perolehan', 'Dokumen_Tanggal', 'Tgl_Pembukuan'], 'safe'],
            [['Panjang', 'Lebar', 'Luas_Lantai', 'Harga'], 'number'],
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
            'Bertingkat_Tidak' => 'Bertingkat Tidak',
            'Beton_tidak' => 'Beton Tidak',
            'Panjang' => 'Panjang',
            'Lebar' => 'Lebar',
            'Luas_Lantai' => 'Luas Lantai',
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
            'Keterangan' => 'Keterangan',
            'Tgl_Pembukuan' => 'Tgl Pembukuan',
            'Kd_Kecamatan' => 'Kd Kecamatan',
            'Kd_Desa' => 'Kd Desa',
            'Invent' => 'Invent',
            'Kd_Hapus' => 'Kd Hapus',
        ];
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
        return $this->hasOne(RefRekAset5::className(), ['Kd_Aset5' => 'Kd_Aset5']);
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
}
