<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TaKibA;

/**
 * TaKibASearch represents the model behind the search form about `app\models\TaKibA`.
 */
class TaKibASearch extends TaKibA
{

    public $kodeUnit;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDPemda', 'Kd_Prov', 'Kd_Kab_Kota', 'Kd_Bidang', 'Kd_Aset1', 'Kd_Aset2', 'Kd_Aset3', 'Kd_Aset4', 'Kd_Aset5', 'Kd_Pemilik', 'Tgl_Perolehan', 'Alamat', 'Hak_Tanah', 'Sertifikat_Tanggal', 'Sertifikat_Nomor', 'Penggunaan', 'Asal_usul', 'Keterangan', 'No_SP2D', 'Tgl_Pembukuan', 'Invent', 'No_SKGuna', 'Kd_Penyusutan', 'Kd_Data', 'Log_User', 'Log_entry', 'Kd_Masalah', 'Ket_Masalah', 'No_SIPPT', 'kodeUnit'], 'safe'],
            [['Kd_Unit', 'Kd_Sub', 'Kd_UPB', 'No_Register', 'Tahun', 'No_ID', 'Kd_Kecamatan', 'Kd_Desa', 'Kd_KA', 'Dev_Id', 'Kd_Hapus'], 'integer'],
            [['Luas_M2', 'Harga'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TaKibA::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        if(isset($this->kodeUnit)){
            $kode = explode('.', $this->kodeUnit);
            if(isset($kode[0])) $this->Kd_Bidang = $kode[0];
            if(isset($kode[1])) $this->Kd_Unit = $kode[1];
        }


        $query->andFilterWhere([
            'Kd_Unit' => $this->Kd_Unit,
            'Kd_Sub' => $this->Kd_Sub,
            'Kd_UPB' => $this->Kd_UPB,
            'No_Register' => $this->No_Register,
            'Tgl_Perolehan' => $this->Tgl_Perolehan,
            'Luas_M2' => $this->Luas_M2,
            'Sertifikat_Tanggal' => $this->Sertifikat_Tanggal,
            'Harga' => $this->Harga,
            'Tahun' => $this->Tahun,
            'No_ID' => $this->No_ID,
            'Tgl_Pembukuan' => $this->Tgl_Pembukuan,
            'Kd_Kecamatan' => $this->Kd_Kecamatan,
            'Kd_Desa' => $this->Kd_Desa,
            'Log_entry' => $this->Log_entry,
            'Kd_KA' => $this->Kd_KA,
            'Dev_Id' => $this->Dev_Id,
            'Kd_Hapus' => $this->Kd_Hapus,
        ]);

        $query->andFilterWhere(['like', 'IDPemda', $this->IDPemda])
            ->andFilterWhere(['like', 'Kd_Prov', $this->Kd_Prov])
            ->andFilterWhere(['like', 'Kd_Kab_Kota', $this->Kd_Kab_Kota])
            ->andFilterWhere(['like', 'Kd_Bidang', $this->Kd_Bidang])
            ->andFilterWhere(['like', 'Kd_Aset1', $this->Kd_Aset1])
            ->andFilterWhere(['like', 'Kd_Aset2', $this->Kd_Aset2])
            ->andFilterWhere(['like', 'Kd_Aset3', $this->Kd_Aset3])
            ->andFilterWhere(['like', 'Kd_Aset4', $this->Kd_Aset4])
            ->andFilterWhere(['like', 'Kd_Aset5', $this->Kd_Aset5])
            ->andFilterWhere(['like', 'Kd_Pemilik', $this->Kd_Pemilik])
            ->andFilterWhere(['like', 'Alamat', $this->Alamat])
            ->andFilterWhere(['like', 'Hak_Tanah', $this->Hak_Tanah])
            ->andFilterWhere(['like', 'Sertifikat_Nomor', $this->Sertifikat_Nomor])
            ->andFilterWhere(['like', 'Penggunaan', $this->Penggunaan])
            ->andFilterWhere(['like', 'Asal_usul', $this->Asal_usul])
            ->andFilterWhere(['like', 'Keterangan', $this->Keterangan])
            ->andFilterWhere(['like', 'No_SP2D', $this->No_SP2D])
            ->andFilterWhere(['like', 'Invent', $this->Invent])
            ->andFilterWhere(['like', 'No_SKGuna', $this->No_SKGuna])
            ->andFilterWhere(['like', 'Kd_Penyusutan', $this->Kd_Penyusutan])
            ->andFilterWhere(['like', 'Kd_Data', $this->Kd_Data])
            ->andFilterWhere(['like', 'Log_User', $this->Log_User])
            ->andFilterWhere(['like', 'Kd_Masalah', $this->Kd_Masalah])
            ->andFilterWhere(['like', 'Ket_Masalah', $this->Ket_Masalah])
            ->andFilterWhere(['like', 'No_SIPPT', $this->No_SIPPT]);

        return $dataProvider;
    }
}
