<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ref_UPB".
 *
 * @property int $Kd_Prov
 * @property int $Kd_Kab_Kota
 * @property int $Kd_Bidang
 * @property int $Kd_Unit
 * @property int $Kd_Sub
 * @property int $Kd_UPB
 * @property string $Nm_UPB
 * @property int $Kd_Kecamatan
 * @property int $Kd_Desa
 *
 * @property RefSubUnit $kdSub
 * @property TaKIBA[] $taKIBAs
 * @property TaKIBB[] $taKIBBs
 * @property TaKIBC[] $taKIBCs
 * @property TaKIBD[] $taKIBDs
 * @property TaKIBE[] $taKIBEs
 * @property TaKIBF[] $taKIBFs
 * @property TaLainnya[] $taLainnyas
 * @property TaPenghapusanRinc[] $taPenghapusanRincs
 * @property TaUPB[] $taUPBs
 */
class RefUPB extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Ref_UPB';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kd_Prov', 'Kd_Kab_Kota', 'Kd_Bidang', 'Kd_Unit', 'Kd_Sub', 'Kd_UPB', 'Nm_UPB'], 'required'],
            [['Kd_Prov', 'Kd_Kab_Kota', 'Kd_Bidang', 'Kd_Unit', 'Kd_Sub', 'Kd_UPB', 'Kd_Kecamatan', 'Kd_Desa'], 'integer'],
            [['Nm_UPB'], 'string'],
            [['Kd_Bidang', 'Kd_Kab_Kota', 'Kd_Prov', 'Kd_Sub', 'Kd_Unit', 'Kd_UPB'], 'unique', 'targetAttribute' => ['Kd_Bidang', 'Kd_Kab_Kota', 'Kd_Prov', 'Kd_Sub', 'Kd_Unit', 'Kd_UPB']],
            [['Kd_Sub'], 'exist', 'skipOnError' => true, 'targetClass' => RefSubUnit::className(), 'targetAttribute' => ['Kd_Sub' => 'Kd_Sub']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Kd_Prov' => 'Kd Prov',
            'Kd_Kab_Kota' => 'Kd Kab Kota',
            'Kd_Bidang' => 'Kd Bidang',
            'Kd_Unit' => 'Kd Unit',
            'Kd_Sub' => 'Kd Sub',
            'Kd_UPB' => 'Kd Upb',
            'Nm_UPB' => 'Nm Upb',
            'Kd_Kecamatan' => 'Kd Kecamatan',
            'Kd_Desa' => 'Kd Desa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdSub()
    {
        return $this->hasOne(RefSubUnit::className(), ['Kd_Sub' => 'Kd_Sub']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBAs()
    {
        return $this->hasMany(TaKIBA::className(), ['Kd_UPB' => 'Kd_UPB']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBBs()
    {
        return $this->hasMany(TaKIBB::className(), ['Kd_UPB' => 'Kd_UPB']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBCs()
    {
        return $this->hasMany(TaKIBC::className(), ['Kd_UPB' => 'Kd_UPB']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBDs()
    {
        return $this->hasMany(TaKIBD::className(), ['Kd_UPB' => 'Kd_UPB']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBEs()
    {
        return $this->hasMany(TaKIBE::className(), ['Kd_UPB' => 'Kd_UPB']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBFs()
    {
        return $this->hasMany(TaKIBF::className(), ['Kd_UPB' => 'Kd_UPB']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaLainnyas()
    {
        return $this->hasMany(TaLainnya::className(), ['Kd_UPB' => 'Kd_UPB']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaPenghapusanRincs()
    {
        return $this->hasMany(TaPenghapusanRinc::className(), ['Kd_UPB' => 'Kd_UPB']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaUPBs()
    {
        return $this->hasMany(TaUPB::className(), ['Kd_UPB' => 'Kd_UPB']);
    }
}
