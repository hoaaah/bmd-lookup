<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Ref_Rek_Aset2".
 *
 * @property int $Kd_Aset1
 * @property int $Kd_Aset2
 * @property string $Nm_Aset2
 *
 * @property RefRekAset1 $kdAset1
 * @property RefRekAset3[] $refRekAset3s
 */
class RefRekAset2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Ref_Rek_Aset2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Kd_Aset1', 'Kd_Aset2', 'Nm_Aset2'], 'required'],
            [['Kd_Aset1', 'Kd_Aset2'], 'integer'],
            [['Nm_Aset2'], 'string'],
            [['Kd_Aset1', 'Kd_Aset2'], 'unique', 'targetAttribute' => ['Kd_Aset1', 'Kd_Aset2']],
            [['Kd_Aset1'], 'exist', 'skipOnError' => true, 'targetClass' => RefRekAset1::className(), 'targetAttribute' => ['Kd_Aset1' => 'Kd_Aset1']],
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
            'Nm_Aset2' => 'Nm Aset2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdAset1()
    {
        return $this->hasOne(RefRekAset1::className(), ['Kd_Aset1' => 'Kd_Aset1']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefRekAset3s()
    {
        return $this->hasMany(RefRekAset3::className(), ['Kd_Aset2' => 'Kd_Aset2']);
    }
}
