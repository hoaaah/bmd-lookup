<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ref_Rek_Aset5".
 *
 * @property int $Kd_Aset1
 * @property int $Kd_Aset2
 * @property int $Kd_Aset3
 * @property int $Kd_Aset4
 * @property int $Kd_Aset5
 * @property string $Nm_Aset5
 *
 * @property RefRekAset4 $kdAset4
 * @property TaKIBA[] $taKIBAs
 * @property TaKIBB[] $taKIBBs
 * @property TaKIBC[] $taKIBCs
 * @property TaKIBD[] $taKIBDs
 * @property TaKIBE[] $taKIBEs
 * @property TaKIBF[] $taKIBFs
 * @property TaLainnya[] $taLainnyas
 * @property TaPemeliharaanRinc[] $taPemeliharaanRincs
 * @property TaPengadaanRinc[] $taPengadaanRincs
 * @property TaPenghapusanRinc[] $taPenghapusanRincs
 * @property TaRKBU[] $taRKBUs
 * @property TaRKPBU[] $taRKPBUs
 */
class RefRekAset5 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Ref_Rek_Aset5';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kd_Aset1', 'Kd_Aset2', 'Kd_Aset3', 'Kd_Aset4', 'Kd_Aset5'], 'required'],
            [['Kd_Aset1', 'Kd_Aset2', 'Kd_Aset3', 'Kd_Aset4', 'Kd_Aset5'], 'integer'],
            [['Nm_Aset5'], 'string'],
            [['Kd_Aset1', 'Kd_Aset2', 'Kd_Aset3', 'Kd_Aset4', 'Kd_Aset5'], 'unique', 'targetAttribute' => ['Kd_Aset1', 'Kd_Aset2', 'Kd_Aset3', 'Kd_Aset4', 'Kd_Aset5']],
            [['Kd_Aset4'], 'exist', 'skipOnError' => true, 'targetClass' => RefRekAset4::className(), 'targetAttribute' => ['Kd_Aset4' => 'Kd_Aset4']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Kd_Aset1' => 'Kd Aset1',
            'Kd_Aset2' => 'Kd Aset2',
            'Kd_Aset3' => 'Kd Aset3',
            'Kd_Aset4' => 'Kd Aset4',
            'Kd_Aset5' => 'Kd Aset5',
            'Nm_Aset5' => 'Nm Aset5',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBAs()
    {
        return $this->hasMany(TaKIBA::className(), ['Kd_Aset5' => 'Kd_Aset5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBBs()
    {
        return $this->hasMany(TaKIBB::className(), ['Kd_Aset5' => 'Kd_Aset5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBCs()
    {
        return $this->hasMany(TaKIBC::className(), ['Kd_Aset5' => 'Kd_Aset5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBDs()
    {
        return $this->hasMany(TaKIBD::className(), ['Kd_Aset5' => 'Kd_Aset5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBEs()
    {
        return $this->hasMany(TaKIBE::className(), ['Kd_Aset5' => 'Kd_Aset5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBFs()
    {
        return $this->hasMany(TaKIBF::className(), ['Kd_Aset5' => 'Kd_Aset5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaLainnyas()
    {
        return $this->hasMany(TaLainnya::className(), ['Kd_Aset5' => 'Kd_Aset5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaPemeliharaanRincs()
    {
        return $this->hasMany(TaPemeliharaanRinc::className(), ['Kd_Aset5' => 'Kd_Aset5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaPengadaanRincs()
    {
        return $this->hasMany(TaPengadaanRinc::className(), ['Kd_Aset5' => 'Kd_Aset5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaPenghapusanRincs()
    {
        return $this->hasMany(TaPenghapusanRinc::className(), ['Kd_Aset5' => 'Kd_Aset5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaRKBUs()
    {
        return $this->hasMany(TaRKBU::className(), ['Kd_Aset5' => 'Kd_Aset5']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaRKPBUs()
    {
        return $this->hasMany(TaRKPBU::className(), ['Kd_Aset5' => 'Kd_Aset5']);
    }
}
