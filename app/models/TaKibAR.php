<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ta_KIBAR".
 *
 * @property string $IDPemda
 * @property int $Kd_Id
 * @property int $No_Urut
 * @property int $Kd_Riwayat
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
 * @property string $Tgl_Dokumen
 * @property string $No_Dokumen
 * @property string $Tgl_Perolehan
 * @property string $Tgl_Pembukuan
 * @property double $Luas_M2
 * @property string $Alamat
 * @property string $Hak_Tanah
 * @property string $Sertifikat_Tanggal
 * @property string $Sertifikat_Nomor
 * @property string $Penggunaan
 * @property string $Asal_usul
 * @property string $Harga
 * @property string $Keterangan
 * @property int $Tahun
 * @property string $No_SP2D
 * @property int $No_ID
 * @property int $Kd_Kecamatan
 * @property int $Kd_Desa
 * @property int $Kd_Prov1
 * @property int $Kd_Kab_Kota1
 * @property int $Kd_Bidang1
 * @property int $Kd_Unit1
 * @property int $Kd_Sub1
 * @property int $Kd_UPB1
 * @property int $No_Register1
 * @property int $Invent
 * @property string $No_SKGuna
 * @property int $Kd_Penyusutan
 * @property int $Kd_Data
 * @property int $Kd_Alasan
 * @property string $Log_User
 * @property string $Log_entry
 * @property string $Nm_Rekanan
 * @property string $Alamat_Reakanan
 * @property string $Tgl_Mulai
 * @property string $Tgl_Selesai
 * @property int $Kd_KA
 * @property string $Kd_Koreksi
 *
 * @property TaKIBA $pemda
 */
class TaKibAR extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Ta_KIBAR';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDPemda', 'Kd_Id', 'No_Urut', 'Kd_Riwayat', 'Kd_Prov', 'Kd_Kab_Kota', 'Kd_Bidang', 'Kd_Unit', 'Kd_Sub', 'Kd_UPB', 'Kd_Aset1', 'Kd_Aset2', 'Kd_Aset3', 'Kd_Aset4', 'Kd_Aset5', 'No_Register', 'Kd_Pemilik'], 'required'],
            [['IDPemda', 'No_Dokumen', 'Alamat', 'Hak_Tanah', 'Sertifikat_Nomor', 'Penggunaan', 'Asal_usul', 'Keterangan', 'No_SP2D', 'No_SKGuna', 'Log_User', 'Nm_Rekanan', 'Alamat_Reakanan', 'Kd_Koreksi'], 'string'],
            [['Kd_Id', 'No_Urut', 'Kd_Riwayat', 'Kd_Prov', 'Kd_Kab_Kota', 'Kd_Bidang', 'Kd_Unit', 'Kd_Sub', 'Kd_UPB', 'Kd_Aset1', 'Kd_Aset2', 'Kd_Aset3', 'Kd_Aset4', 'Kd_Aset5', 'No_Register', 'Kd_Pemilik', 'Tahun', 'No_ID', 'Kd_Kecamatan', 'Kd_Desa', 'Kd_Prov1', 'Kd_Kab_Kota1', 'Kd_Bidang1', 'Kd_Unit1', 'Kd_Sub1', 'Kd_UPB1', 'No_Register1', 'Invent', 'Kd_Penyusutan', 'Kd_Data', 'Kd_Alasan', 'Kd_KA'], 'integer'],
            [['Tgl_Dokumen', 'Tgl_Perolehan', 'Tgl_Pembukuan', 'Sertifikat_Tanggal', 'Log_entry', 'Tgl_Mulai', 'Tgl_Selesai'], 'safe'],
            [['Luas_M2', 'Harga'], 'number'],
            [['IDPemda', 'Kd_Id'], 'unique', 'targetAttribute' => ['IDPemda', 'Kd_Id']],
            [['IDPemda'], 'exist', 'skipOnError' => true, 'targetClass' => TaKIBA::className(), 'targetAttribute' => ['IDPemda' => 'IDPemda']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'IDPemda' => 'Id Pemda',
            'Kd_Id' => 'Kd ID',
            'No_Urut' => 'No Urut',
            'Kd_Riwayat' => 'Kd Riwayat',
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
            'Tgl_Dokumen' => 'Tgl Dokumen',
            'No_Dokumen' => 'No Dokumen',
            'Tgl_Perolehan' => 'Tgl Perolehan',
            'Tgl_Pembukuan' => 'Tgl Pembukuan',
            'Luas_M2' => 'Luas M2',
            'Alamat' => 'Alamat',
            'Hak_Tanah' => 'Hak Tanah',
            'Sertifikat_Tanggal' => 'Sertifikat Tanggal',
            'Sertifikat_Nomor' => 'Sertifikat Nomor',
            'Penggunaan' => 'Penggunaan',
            'Asal_usul' => 'Asal Usul',
            'Harga' => 'Harga',
            'Keterangan' => 'Keterangan',
            'Tahun' => 'Tahun',
            'No_SP2D' => 'No Sp2 D',
            'No_ID' => 'No ID',
            'Kd_Kecamatan' => 'Kd Kecamatan',
            'Kd_Desa' => 'Kd Desa',
            'Kd_Prov1' => 'Kd Prov1',
            'Kd_Kab_Kota1' => 'Kd Kab Kota1',
            'Kd_Bidang1' => 'Kd Bidang1',
            'Kd_Unit1' => 'Kd Unit1',
            'Kd_Sub1' => 'Kd Sub1',
            'Kd_UPB1' => 'Kd Upb1',
            'No_Register1' => 'No Register1',
            'Invent' => 'Invent',
            'No_SKGuna' => 'No Sk Guna',
            'Kd_Penyusutan' => 'Kd Penyusutan',
            'Kd_Data' => 'Kd Data',
            'Kd_Alasan' => 'Kd Alasan',
            'Log_User' => 'Log User',
            'Log_entry' => 'Log Entry',
            'Nm_Rekanan' => 'Nm Rekanan',
            'Alamat_Reakanan' => 'Alamat Reakanan',
            'Tgl_Mulai' => 'Tgl Mulai',
            'Tgl_Selesai' => 'Tgl Selesai',
            'Kd_KA' => 'Kd Ka',
            'Kd_Koreksi' => 'Kd Koreksi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPemda()
    {
        return $this->hasOne(TaKIBA::className(), ['IDPemda' => 'IDPemda']);
    }
}
