<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ref_Pemda".
 *
 * @property int $Kd_Prov
 * @property int $Kd_Kab_Kota
 * @property string $Nm_Pemda
 * @property string $Ibukota
 * @property string $Alamat
 * @property resource $Logo
 * @property int $Basis
 *
 * @property RefKabKota $kdKabKota
 * @property RefUnit[] $refUnits
 * @property TaKIBA[] $taKIBAs
 * @property TaKIBB[] $taKIBBs
 * @property TaKIBC[] $taKIBCs
 * @property TaKIBD[] $taKIBDs
 * @property TaKIBE[] $taKIBEs
 * @property TaKIBF[] $taKIBFs
 * @property TaPemda[] $taPemdas
 */
class RefPemda extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Ref_Pemda';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kd_Prov', 'Kd_Kab_Kota', 'Nm_Pemda'], 'required'],
            [['Kd_Prov', 'Kd_Kab_Kota', 'Basis'], 'integer'],
            [['Nm_Pemda', 'Ibukota', 'Alamat', 'Logo'], 'string'],
            [['Kd_Kab_Kota', 'Kd_Prov'], 'unique', 'targetAttribute' => ['Kd_Kab_Kota', 'Kd_Prov']],
            [['Kd_Kab_Kota'], 'exist', 'skipOnError' => true, 'targetClass' => RefKabKota::className(), 'targetAttribute' => ['Kd_Kab_Kota' => 'Kd_Kab_Kota']],
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
            'Nm_Pemda' => 'Nm Pemda',
            'Ibukota' => 'Ibukota',
            'Alamat' => 'Alamat',
            'Logo' => 'Logo',
            'Basis' => 'Basis',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdKabKota()
    {
        return $this->hasOne(RefKabKota::className(), ['Kd_Kab_Kota' => 'Kd_Kab_Kota']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefUnits()
    {
        return $this->hasMany(RefUnit::className(), ['Kd_Kab_Kota' => 'Kd_Kab_Kota']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBAs()
    {
        return $this->hasMany(TaKIBA::className(), ['Kd_Kab_Kota' => 'Kd_Kab_Kota']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBBs()
    {
        return $this->hasMany(TaKIBB::className(), ['Kd_Kab_Kota' => 'Kd_Kab_Kota']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBCs()
    {
        return $this->hasMany(TaKIBC::className(), ['Kd_Kab_Kota' => 'Kd_Kab_Kota']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBDs()
    {
        return $this->hasMany(TaKIBD::className(), ['Kd_Kab_Kota' => 'Kd_Kab_Kota']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBEs()
    {
        return $this->hasMany(TaKIBE::className(), ['Kd_Kab_Kota' => 'Kd_Kab_Kota']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBFs()
    {
        return $this->hasMany(TaKIBF::className(), ['Kd_Kab_Kota' => 'Kd_Kab_Kota']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaPemdas()
    {
        return $this->hasMany(TaPemda::className(), ['Kd_Kab_Kota' => 'Kd_Kab_Kota']);
    }
}
