<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ta_KIB_B".
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
 * @property int $Kd_Ruang
 * @property int $Kd_Pemilik
 * @property string $Merk
 * @property string $Type
 * @property string $CC
 * @property string $Bahan
 * @property string $Tgl_Perolehan
 * @property string $Nomor_Pabrik
 * @property string $Nomor_Rangka
 * @property string $Nomor_Mesin
 * @property string $Nomor_Polisi
 * @property string $Nomor_BPKB
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
 * @property int $Kd_Masalah
 * @property string $Ket_Masalah
 * @property int $Kd_KA
 * @property string $No_SIPPT
 * @property int $Dev_Id
 * @property int $Kd_Hapus
 *
 * @property TaFotoB[] $taFotoBs
 * @property RefPemilik $kdPemilik
 * @property RefRekAset5 $kdAset5
 * @property RefPemda $kdKabKota
 * @property RefUPB $kdUPB
 * @property TaKIBBHapus $taKIBBHapus
 * @property TaKIBBR[] $taKIBBRs
 * @property TaSusutB[] $taSusutBs
 */
class TaKibB extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Ta_KIB_B';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPemda', 'Kd_Prov', 'Kd_Kab_Kota', 'Kd_Bidang', 'Kd_Unit', 'Kd_Sub', 'Kd_UPB', 'Kd_Aset1', 'Kd_Aset2', 'Kd_Aset3', 'Kd_Aset4', 'Kd_Aset5', 'No_Register', 'Kd_Pemilik', 'Tgl_Perolehan', 'Asal_usul', 'Kondisi', 'Harga', 'Kd_Hapus'], 'required'],
            [['IDPemda', 'Merk', 'Type', 'CC', 'Bahan', 'Nomor_Pabrik', 'Nomor_Rangka', 'Nomor_Mesin', 'Nomor_Polisi', 'Nomor_BPKB', 'Asal_usul', 'Kondisi', 'Keterangan', 'No_SP2D', 'No_SKGuna', 'Log_User', 'Ket_Masalah', 'No_SIPPT'], 'string'],
            [['Kd_Prov', 'Kd_Kab_Kota', 'Kd_Bidang', 'Kd_Unit', 'Kd_Sub', 'Kd_UPB', 'Kd_Aset1', 'Kd_Aset2', 'Kd_Aset3', 'Kd_Aset4', 'Kd_Aset5', 'No_Register', 'Kd_Ruang', 'Kd_Pemilik', 'Masa_Manfaat', 'Tahun', 'No_ID', 'Kd_Kecamatan', 'Kd_Desa', 'Invent', 'Kd_Penyusutan', 'Kd_Data', 'Kd_Masalah', 'Kd_KA', 'Dev_Id', 'Kd_Hapus'], 'integer'],
            [['Tgl_Perolehan', 'Tgl_Pembukuan', 'Log_entry'], 'safe'],
            [['Harga', 'Nilai_Sisa'], 'number'],
            [['IDPemda'], 'unique'],
            [['Kd_Pemilik'], 'exist', 'skipOnError' => true, 'targetClass' => RefPemilik::class, 'targetAttribute' => ['Kd_Pemilik' => 'Kd_Pemilik']],
            [['Kd_Aset5'], 'exist', 'skipOnError' => true, 'targetClass' => RefRekAset5::class, 'targetAttribute' => ['Kd_Aset5' => 'Kd_Aset5']],
            [['Kd_Kab_Kota'], 'exist', 'skipOnError' => true, 'targetClass' => RefPemda::class, 'targetAttribute' => ['Kd_Kab_Kota' => 'Kd_Kab_Kota']],
            [['Kd_UPB'], 'exist', 'skipOnError' => true, 'targetClass' => RefUPB::class, 'targetAttribute' => ['Kd_UPB' => 'Kd_UPB']],
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
            'Kd_Ruang' => 'Kd Ruang',
            'Kd_Pemilik' => 'Kd Pemilik',
            'Merk' => 'Merk',
            'Type' => 'Type',
            'CC' => 'Cc',
            'Bahan' => 'Bahan',
            'Tgl_Perolehan' => 'Tgl Perolehan',
            'Nomor_Pabrik' => 'Nomor Pabrik',
            'Nomor_Rangka' => 'Nomor Rangka',
            'Nomor_Mesin' => 'Nomor Mesin',
            'Nomor_Polisi' => 'Nomor Polisi',
            'Nomor_BPKB' => 'Nomor Bpkb',
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
            'Kd_Masalah' => 'Kd Masalah',
            'Ket_Masalah' => 'Ket Masalah',
            'Kd_KA' => 'Kd Ka',
            'No_SIPPT' => 'No Sippt',
            'Dev_Id' => 'Dev ID',
            'Kd_Hapus' => 'Kd Hapus',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaFotoBs()
    {
        return $this->hasMany(TaFotoB::class, ['IDPemda' => 'IDPemda']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdPemilik()
    {
        return $this->hasOne(RefPemilik::class, ['Kd_Pemilik' => 'Kd_Pemilik']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdAset5()
    {
        return $this->hasOne(RefRekAset5::class, [
            'Kd_Aset1' => 'Kd_Aset1',
            'Kd_Aset2' => 'Kd_Aset2',
            'Kd_Aset3' => 'Kd_Aset3',
            'Kd_Aset4' => 'Kd_Aset4',
            'Kd_Aset5' => 'Kd_Aset5'
        ]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdKabKota()
    {
        return $this->hasOne(RefPemda::class, ['Kd_Kab_Kota' => 'Kd_Kab_Kota']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdUPB()
    {
        return $this->hasOne(RefUPB::class, [
            'Kd_Prov' => 'Kd_Prov',
            'Kd_Kab_Kota' => 'Kd_Kab_Kota',
            'Kd_Bidang' => 'Kd_Bidang',
            'Kd_Unit' => 'Kd_Unit',
            'Kd_Sub' => 'Kd_Sub',
            'Kd_UPB' => 'Kd_UPB'
        ]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBBHapus()
    {
        return $this->hasOne(TaKIBBHapus::class, ['IDPemda' => 'IDPemda']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBBRs()
    {
        return $this->hasMany(TaKIBBR::class, ['IDPemda' => 'IDPemda']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaSusutBs()
    {
        return $this->hasMany(TaSusutB::class, ['IDPemda' => 'IDPemda']);
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
