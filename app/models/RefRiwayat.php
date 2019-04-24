<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ref_Riwayat".
 *
 * @property int $Kd_Riwayat
 * @property string $Nm_Riwayat
 */
class RefRiwayat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Ref_Riwayat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kd_Riwayat'], 'required'],
            [['Kd_Riwayat'], 'integer'],
            [['Nm_Riwayat'], 'string'],
            [['Kd_Riwayat'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Kd_Riwayat' => 'Kd Riwayat',
            'Nm_Riwayat' => 'Nm Riwayat',
        ];
    }
}
