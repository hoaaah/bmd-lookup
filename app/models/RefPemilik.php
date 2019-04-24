<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ref_Pemilik".
 *
 * @property int $Kd_Pemilik
 * @property string $Nm_Pemilik
 *
 * @property TaKIBA[] $taKIBAs
 * @property TaKIBB[] $taKIBBs
 * @property TaKIBC[] $taKIBCs
 * @property TaKIBD[] $taKIBDs
 * @property TaKIBF[] $taKIBFs
 */
class RefPemilik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Ref_Pemilik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kd_Pemilik', 'Nm_Pemilik'], 'required'],
            [['Kd_Pemilik'], 'integer'],
            [['Nm_Pemilik'], 'string'],
            [['Kd_Pemilik'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Kd_Pemilik' => 'Kd Pemilik',
            'Nm_Pemilik' => 'Nm Pemilik',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBAs()
    {
        return $this->hasMany(TaKIBA::className(), ['Kd_Pemilik' => 'Kd_Pemilik']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBBs()
    {
        return $this->hasMany(TaKIBB::className(), ['Kd_Pemilik' => 'Kd_Pemilik']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBCs()
    {
        return $this->hasMany(TaKIBC::className(), ['Kd_Pemilik' => 'Kd_Pemilik']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBDs()
    {
        return $this->hasMany(TaKIBD::className(), ['Kd_Pemilik' => 'Kd_Pemilik']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTaKIBFs()
    {
        return $this->hasMany(TaKIBF::className(), ['Kd_Pemilik' => 'Kd_Pemilik']);
    }
}
