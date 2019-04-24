<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TaKibB;

/**
 * TaKibBSearch represents the model behind the search form about `app\models\TaKibB`.
 */
class TaKibBSearch extends TaKibB
{

    public $kodeAset, $kodeUnit;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDPemda', 'Kd_Prov', 'kodeUnit', 'Kd_Kab_Kota', 'Kd_Bidang', 'Kd_Aset1', 'Kd_Aset2', 'Kd_Aset3', 'Kd_Aset4', 'Kd_Aset5', 'Kd_Pemilik', 'Merk', 'Type', 'CC', 'Bahan', 'Tgl_Perolehan', 'Nomor_Pabrik', 'Nomor_Rangka', 'Nomor_Mesin', 'Nomor_Polisi', 'Nomor_BPKB', 'Asal_usul', 'Kondisi', 'Keterangan', 'No_SP2D', 'Tgl_Pembukuan', 'Invent', 'No_SKGuna', 'Kd_Penyusutan', 'Kd_Data', 'Log_User', 'Log_entry', 'Kd_Masalah', 'Ket_Masalah', 'No_SIPPT', 'kodeAset'], 'safe'],
            [['Kd_Unit', 'Kd_Sub', 'Kd_UPB', 'No_Register', 'Kd_Ruang', 'Masa_Manfaat', 'Tahun', 'No_ID', 'Kd_Kecamatan', 'Kd_Desa', 'Kd_KA', 'Dev_Id', 'Kd_Hapus'], 'integer'],
            [['Harga', 'Nilai_Sisa'], 'number'],
            ['kodeAset', 'string', 'length' => [3, 24], 'message' => 'Kode dipisahkan dengan titik, contoh 2.1.3.5 (jika hanya sampai rekening 3 maka ditulis 2.1.3)'],
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
        $query = TaKibB::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        if(isset($this->kodeAset)){
            $kodeAset = explode('.', $this->kodeAset);
            if(isset($kodeAset[0])) $this->Kd_Aset1 = $kodeAset[0];
            if(isset($kodeAset[1])) $this->Kd_Aset2 = $kodeAset[1];
            if(isset($kodeAset[2])) $this->Kd_Aset3 = $kodeAset[2];
            if(isset($kodeAset[3])) $this->Kd_Aset4 = $kodeAset[3];
            if(isset($kodeAset[4])) $this->Kd_Aset5 = $kodeAset[4];
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
            'Kd_Ruang' => $this->Kd_Ruang,
            'Tgl_Perolehan' => $this->Tgl_Perolehan,
            'Harga' => $this->Harga,
            'Masa_Manfaat' => $this->Masa_Manfaat,
            'Nilai_Sisa' => $this->Nilai_Sisa,
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
            ->andFilterWhere(['like', 'Merk', $this->Merk])
            ->andFilterWhere(['like', 'Type', $this->Type])
            ->andFilterWhere(['like', 'CC', $this->CC])
            ->andFilterWhere(['like', 'Bahan', $this->Bahan])
            ->andFilterWhere(['like', 'Nomor_Pabrik', $this->Nomor_Pabrik])
            ->andFilterWhere(['like', 'Nomor_Rangka', $this->Nomor_Rangka])
            ->andFilterWhere(['like', 'Nomor_Mesin', $this->Nomor_Mesin])
            ->andFilterWhere(['like', 'Nomor_Polisi', $this->Nomor_Polisi])
            ->andFilterWhere(['like', 'Nomor_BPKB', $this->Nomor_BPKB])
            ->andFilterWhere(['like', 'Asal_usul', $this->Asal_usul])
            ->andFilterWhere(['like', 'Kondisi', $this->Kondisi])
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
