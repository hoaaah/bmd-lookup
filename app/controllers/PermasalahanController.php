<?php

namespace app\controllers;

use Yii;
use yii\data\SqlDataProvider;

class PermasalahanController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionP1()
    {
        $totalCount = Yii::$app->db->createCommand("
            SELECT COUNT(a.IDPemda) FROM
            (

                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBAR a LEFT JOIN Ta_KIB_A b ON a.IDPemda = b.IDPemda WHERE b.IDPemda IS NULL
                UNION ALL
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBBR a LEFT JOIN Ta_KIB_B b ON a.IDPemda = b.IDPemda WHERE b.IDPemda IS NULL
                UNION ALL
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBCR a LEFT JOIN Ta_KIB_C b ON a.IDPemda = b.IDPemda WHERE b.IDPemda IS NULL
                UNION ALL
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBDR a LEFT JOIN Ta_KIB_D b ON a.IDPemda = b.IDPemda WHERE b.IDPemda IS NULL
                UNION ALL
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBER a LEFT JOIN Ta_KIB_E b ON a.IDPemda = b.IDPemda WHERE b.IDPemda IS NULL
            )a
        ")->queryScalar();
        
        $dataProvider = new SqlDataProvider([
            'sql' => '
                SELECT * FROM 
                (
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBAR a LEFT JOIN Ta_KIB_A b ON a.IDPemda = b.IDPemda WHERE b.IDPemda IS NULL
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBBR a LEFT JOIN Ta_KIB_B b ON a.IDPemda = b.IDPemda WHERE b.IDPemda IS NULL
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBCR a LEFT JOIN Ta_KIB_C b ON a.IDPemda = b.IDPemda WHERE b.IDPemda IS NULL
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBDR a LEFT JOIN Ta_KIB_D b ON a.IDPemda = b.IDPemda WHERE b.IDPemda IS NULL
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBER a LEFT JOIN Ta_KIB_E b ON a.IDPemda = b.IDPemda WHERE b.IDPemda IS NULL
                ) a
            ',
            'totalCount' => $totalCount,
            'pagination' => [
                'pageSize' => 50,
            ],
        ]);
        // return var_dump($dataProvider->getModels());
        return $this->render("p1", ['dataProvider' => $dataProvider]);
    }
    
    public function actionP2()
    {
        $totalCount = Yii::$app->db->createCommand("
            SELECT COUNT(a.Kd_Bidang) FROM
            (
                SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, jumlah
                FROM
                (
                    SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, COUNT(IDPemda) AS jumlah
                    FROM Ta_KIB_A
                    GROUP BY Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register
                ) a WHERE jumlah > 1
                UNION ALL
                SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, jumlah
                FROM
                (
                    SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, COUNT(IDPemda) AS jumlah
                    FROM Ta_KIB_B 
                    GROUP BY Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register
                ) a WHERE jumlah > 1
                UNION ALL 
                SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, jumlah
                FROM
                (
                    SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, COUNT(IDPemda) AS jumlah
                    FROM Ta_KIB_C
                    GROUP BY Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register
                ) a WHERE jumlah > 1
                UNION ALL 
                SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, jumlah
                FROM
                (
                    SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, COUNT(IDPemda) AS jumlah
                    FROM Ta_KIB_D
                    GROUP BY Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register
                ) a WHERE jumlah > 1
                UNION ALL
                SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, jumlah
                FROM
                (
                    SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, COUNT(IDPemda) AS jumlah
                    FROM Ta_KIB_E 
                    GROUP BY Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register
                ) a WHERE jumlah > 1
            )a
        ")->queryScalar();
        
        $dataProvider = new SqlDataProvider([
            'sql' => '
                SELECT * FROM 
                (
                    SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, jumlah
                    FROM
                    (
                        SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, COUNT(IDPemda) AS jumlah
                        FROM Ta_KIB_A
                        GROUP BY Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register
                    ) a WHERE jumlah > 1
                    UNION ALL
                    SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, jumlah
                    FROM
                    (
                        SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, COUNT(IDPemda) AS jumlah
                        FROM Ta_KIB_B 
                        GROUP BY Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register
                    ) a WHERE jumlah > 1
                    UNION ALL 
                    SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, jumlah
                    FROM
                    (
                        SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, COUNT(IDPemda) AS jumlah
                        FROM Ta_KIB_C
                        GROUP BY Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register
                    ) a WHERE jumlah > 1
                    UNION ALL 
                    SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, jumlah
                    FROM
                    (
                        SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, COUNT(IDPemda) AS jumlah
                        FROM Ta_KIB_D
                        GROUP BY Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register
                    ) a WHERE jumlah > 1
                    UNION ALL
                    SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, jumlah
                    FROM
                    (
                        SELECT Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register, COUNT(IDPemda) AS jumlah
                        FROM Ta_KIB_E 
                        GROUP BY Kd_Bidang, Kd_Unit, Kd_Sub, Kd_UPB, Kd_Aset1, Kd_Aset2, Kd_Aset3, Kd_Aset4, Kd_Aset5, No_Register
                    ) a WHERE jumlah > 1
                ) a
            ',
            'totalCount' => $totalCount,
            'pagination' => [
                'pageSize' => 50,
            ],
        ]);
        // return var_dump($dataProvider->getModels());
        return $this->render("p2", ['dataProvider' => $dataProvider]);
    }
    
    public function actionP3()
    {
        $totalCount = Yii::$app->db->createCommand("
            SELECT COUNT(a.IDPemda) FROM
            (
                SELECT
                a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBAR a LEFT JOIN Ta_KIB_A b ON a.IDPemda = b.IDPemda WHERE a.Tgl_Perolehan != b.Tgl_Perolehan
                UNION ALL
                SELECT
                a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBBR a LEFT JOIN Ta_KIB_B b ON a.IDPemda = b.IDPemda WHERE a.Tgl_Perolehan != b.Tgl_Perolehan
                UNION ALL
                SELECT
                a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBCR a LEFT JOIN Ta_KIB_C b ON a.IDPemda = b.IDPemda WHERE a.Tgl_Perolehan != b.Tgl_Perolehan
                UNION ALL
                SELECT
                a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBDR a LEFT JOIN Ta_KIB_D b ON a.IDPemda = b.IDPemda WHERE a.Tgl_Perolehan != b.Tgl_Perolehan
                UNION ALL
                SELECT
                a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBER a LEFT JOIN Ta_KIB_E b ON a.IDPemda = b.IDPemda WHERE a.Tgl_Perolehan != b.Tgl_Perolehan
            )a
        ")->queryScalar();
        
        $dataProvider = new SqlDataProvider([
            'sql' => '
                SELECT * FROM 
                (
                    SELECT
                    a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBAR a LEFT JOIN Ta_KIB_A b ON a.IDPemda = b.IDPemda WHERE a.Tgl_Perolehan != b.Tgl_Perolehan
                    UNION ALL
                    SELECT
                    a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBBR a LEFT JOIN Ta_KIB_B b ON a.IDPemda = b.IDPemda WHERE a.Tgl_Perolehan != b.Tgl_Perolehan
                    UNION ALL
                    SELECT
                    a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBCR a LEFT JOIN Ta_KIB_C b ON a.IDPemda = b.IDPemda WHERE a.Tgl_Perolehan != b.Tgl_Perolehan
                    UNION ALL
                    SELECT
                    a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBDR a LEFT JOIN Ta_KIB_D b ON a.IDPemda = b.IDPemda WHERE a.Tgl_Perolehan != b.Tgl_Perolehan
                    UNION ALL
                    SELECT
                    a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBER a LEFT JOIN Ta_KIB_E b ON a.IDPemda = b.IDPemda WHERE a.Tgl_Perolehan != b.Tgl_Perolehan
                ) a
            ',
            'totalCount' => $totalCount,
            'pagination' => [
                'pageSize' => 50,
            ],
        ]);
        // return var_dump($dataProvider->getModels());
        return $this->render("p3", ['dataProvider' => $dataProvider]);
    }
    

    public function actionP4()
    {
        $totalCount = Yii::$app->db->createCommand("
            SELECT COUNT(a.IDPemda) FROM
            (
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBAR a WHERE Kd_Riwayat = 3 AND Tgl_Dokumen != Tgl_Pembukuan
                UNION ALL
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBBR a WHERE Kd_Riwayat = 3 AND Tgl_Dokumen != Tgl_Pembukuan
                UNION ALL
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBCR a WHERE Kd_Riwayat = 3 AND Tgl_Dokumen != Tgl_Pembukuan
                UNION ALL
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBDR a WHERE Kd_Riwayat = 3 AND Tgl_Dokumen != Tgl_Pembukuan
                UNION ALL
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBER a WHERE Kd_Riwayat = 3 AND Tgl_Dokumen != Tgl_Pembukuan                            
            )a
        ")->queryScalar();

        $dataProvider = new SqlDataProvider([
            'sql' => '
                SELECT * FROM 
                (
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBAR a WHERE Kd_Riwayat = 3 AND Tgl_Dokumen != Tgl_Pembukuan
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBBR a WHERE Kd_Riwayat = 3 AND Tgl_Dokumen != Tgl_Pembukuan
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBCR a WHERE Kd_Riwayat = 3 AND Tgl_Dokumen != Tgl_Pembukuan
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBDR a WHERE Kd_Riwayat = 3 AND Tgl_Dokumen != Tgl_Pembukuan
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBER a WHERE Kd_Riwayat = 3 AND Tgl_Dokumen != Tgl_Pembukuan            
                ) a
            ',
            'totalCount' => $totalCount,
            'pagination' => [
                'pageSize' => 50,
            ],
        ]);

        return $this->render("p4", ['dataProvider' => $dataProvider]);
    }
    
    public function actionP5()
    {
        $totalCount = Yii::$app->db->createCommand("
            SELECT COUNT(a.IDPemda) FROM
            (
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, 
                a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, 
                a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBBR a
                LEFT JOIN Ta_KIB_B b ON a.IDPemda = b.IDPemda
                LEFT JOIN 
                (
                    SELECT * FROM Ta_KIBBR d WHERE d.Kd_Riwayat = 1
                ) c ON a.IDPemda = c.IDPemda AND (a.No_Urut - c.No_Urut) = 1
                WHERE a.Kd_Riwayat = 3 AND ((a.Kondisi = 1 AND b.Kondisi = 3) OR (a.Kondisi = 1 AND c.Kondisi = 3))
                UNION ALL
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, 
                a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, 
                a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBCR a
                LEFT JOIN Ta_KIB_C b ON a.IDPemda = b.IDPemda
                LEFT JOIN 
                (
                    SELECT * FROM Ta_KIBCR d WHERE d.Kd_Riwayat = 1
                ) c ON a.IDPemda = c.IDPemda AND (a.No_Urut - c.No_Urut) = 1
                WHERE a.Kd_Riwayat = 3 AND ((a.Kondisi = 1 AND b.Kondisi = 3) OR (a.Kondisi = 1 AND c.Kondisi = 3))
                UNION ALL
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, 
                a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, 
                a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBDR a
                LEFT JOIN Ta_KIB_D b ON a.IDPemda = b.IDPemda
                LEFT JOIN 
                (
                    SELECT * FROM Ta_KIBDR d WHERE d.Kd_Riwayat = 1
                ) c ON a.IDPemda = c.IDPemda AND (a.No_Urut - c.No_Urut) = 1
                WHERE a.Kd_Riwayat = 3 AND ((a.Kondisi = 1 AND b.Kondisi = 3) OR (a.Kondisi = 1 AND c.Kondisi = 3))
                UNION ALL
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, 
                a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, 
                a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBER a
                LEFT JOIN Ta_KIB_E b ON a.IDPemda = b.IDPemda
                LEFT JOIN 
                (
                    SELECT * FROM Ta_KIBER d WHERE d.Kd_Riwayat = 1
                ) c ON a.IDPemda = c.IDPemda AND (a.No_Urut - c.No_Urut) = 1
                WHERE a.Kd_Riwayat = 3 AND ((a.Kondisi = 1 AND b.Kondisi = 3) OR (a.Kondisi = 1 AND c.Kondisi = 3))
            )a
        ")->queryScalar();
        
        $dataProvider = new SqlDataProvider([
            'sql' => '
                SELECT * FROM 
                (
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, 
                    a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, 
                    a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBBR a
                    LEFT JOIN Ta_KIB_B b ON a.IDPemda = b.IDPemda
                    LEFT JOIN 
                    (
                        SELECT * FROM Ta_KIBBR d WHERE d.Kd_Riwayat = 1
                    ) c ON a.IDPemda = c.IDPemda AND (a.No_Urut - c.No_Urut) = 1
                    WHERE a.Kd_Riwayat = 3 AND ((a.Kondisi = 1 AND b.Kondisi = 3) OR (a.Kondisi = 1 AND c.Kondisi = 3))
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, 
                    a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, 
                    a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBCR a
                    LEFT JOIN Ta_KIB_C b ON a.IDPemda = b.IDPemda
                    LEFT JOIN 
                    (
                        SELECT * FROM Ta_KIBCR d WHERE d.Kd_Riwayat = 1
                    ) c ON a.IDPemda = c.IDPemda AND (a.No_Urut - c.No_Urut) = 1
                    WHERE a.Kd_Riwayat = 3 AND ((a.Kondisi = 1 AND b.Kondisi = 3) OR (a.Kondisi = 1 AND c.Kondisi = 3))
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, 
                    a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, 
                    a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBDR a
                    LEFT JOIN Ta_KIB_D b ON a.IDPemda = b.IDPemda
                    LEFT JOIN 
                    (
                        SELECT * FROM Ta_KIBDR d WHERE d.Kd_Riwayat = 1
                    ) c ON a.IDPemda = c.IDPemda AND (a.No_Urut - c.No_Urut) = 1
                    WHERE a.Kd_Riwayat = 3 AND ((a.Kondisi = 1 AND b.Kondisi = 3) OR (a.Kondisi = 1 AND c.Kondisi = 3))
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, 
                    a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, 
                    a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBER a
                    LEFT JOIN Ta_KIB_E b ON a.IDPemda = b.IDPemda
                    LEFT JOIN 
                    (
                        SELECT * FROM Ta_KIBER d WHERE d.Kd_Riwayat = 1
                    ) c ON a.IDPemda = c.IDPemda AND (a.No_Urut - c.No_Urut) = 1
                    WHERE a.Kd_Riwayat = 3 AND ((a.Kondisi = 1 AND b.Kondisi = 3) OR (a.Kondisi = 1 AND c.Kondisi = 3))
                ) a
            ',
            'totalCount' => $totalCount,
            'pagination' => [
                'pageSize' => 50,
            ],
        ]);
        // return var_dump($dataProvider->getModels());
        return $this->render("p5", ['dataProvider' => $dataProvider]);
    }
    
    public function actionP7()
    {
        $totalCount = Yii::$app->db->createCommand("
            SELECT COUNT(a.IDPemda) FROM
            (
                SELECT a.IDPemda, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIB_A a WHERE Tgl_Pembukuan < Tgl_Perolehan
                UNION ALL
                SELECT a.IDPemda, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIB_B a WHERE Tgl_Pembukuan < Tgl_Perolehan
                UNION ALL
                SELECT a.IDPemda, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIB_C a WHERE Tgl_Pembukuan < Tgl_Perolehan
                UNION ALL
                SELECT a.IDPemda, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIB_D a WHERE Tgl_Pembukuan < Tgl_Perolehan
                UNION ALL
                SELECT a.IDPemda, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIB_E a WHERE Tgl_Pembukuan < Tgl_Perolehan
            )a
        ")->queryScalar();
        
        $dataProvider = new SqlDataProvider([
            'sql' => '
                SELECT * FROM 
                (
                    SELECT a.IDPemda, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIB_A a WHERE Tgl_Pembukuan < Tgl_Perolehan
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIB_B a WHERE Tgl_Pembukuan < Tgl_Perolehan
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIB_C a WHERE Tgl_Pembukuan < Tgl_Perolehan
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIB_D a WHERE Tgl_Pembukuan < Tgl_Perolehan
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIB_E a WHERE Tgl_Pembukuan < Tgl_Perolehan
                ) a
            ',
            'totalCount' => $totalCount,
            'pagination' => [
                'pageSize' => 50,
            ],
        ]);
        // return var_dump($dataProvider->getModels());
        return $this->render("p7", ['dataProvider' => $dataProvider]);
    }
    
    
    public function actionP8()
    {
        $totalCount = Yii::$app->db->createCommand("
            SELECT COUNT(a.IDPemda) FROM
            (
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBAR a LEFT JOIN Ta_KIB_A b ON a.IDPemda = b.IDPemda WHERE a.Kd_KA != b.Kd_KA
                UNION ALL
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBBR a LEFT JOIN Ta_KIB_B b ON a.IDPemda = b.IDPemda WHERE a.Kd_KA != b.Kd_KA
                UNION ALL
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBCR a LEFT JOIN Ta_KIB_C b ON a.IDPemda = b.IDPemda WHERE a.Kd_KA != b.Kd_KA
                UNION ALL
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBDR a LEFT JOIN Ta_KIB_D b ON a.IDPemda = b.IDPemda WHERE a.Kd_KA != b.Kd_KA
                UNION ALL
                SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                FROM Ta_KIBER a LEFT JOIN Ta_KIB_E b ON a.IDPemda = b.IDPemda WHERE a.Kd_KA != b.Kd_KA
            )a
        ")->queryScalar();
        
        $dataProvider = new SqlDataProvider([
            'sql' => '
                SELECT * FROM 
                (
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBAR a LEFT JOIN Ta_KIB_A b ON a.IDPemda = b.IDPemda WHERE a.Kd_KA != b.Kd_KA
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBBR a LEFT JOIN Ta_KIB_B b ON a.IDPemda = b.IDPemda WHERE a.Kd_KA != b.Kd_KA
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBCR a LEFT JOIN Ta_KIB_C b ON a.IDPemda = b.IDPemda WHERE a.Kd_KA != b.Kd_KA
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBDR a LEFT JOIN Ta_KIB_D b ON a.IDPemda = b.IDPemda WHERE a.Kd_KA != b.Kd_KA
                    UNION ALL
                    SELECT a.IDPemda, a.Kd_Id, a.No_Urut, a.Kd_Riwayat, a.Kd_Prov, a.Kd_Kab_Kota, a.Kd_Bidang, a.Kd_Unit, a.Kd_Sub, a.Kd_UPB, a.Kd_Aset1, a.Kd_Aset2, a.Kd_Aset3, a.Kd_Aset4, a.Kd_Aset5, a.No_Register, a.Kd_Pemilik, a.Tgl_Dokumen, a.No_Dokumen, a.Tgl_perolehan, a.Tgl_Pembukuan, a.harga
                    FROM Ta_KIBER a LEFT JOIN Ta_KIB_E b ON a.IDPemda = b.IDPemda WHERE a.Kd_KA != b.Kd_KA
                ) a
            ',
            'totalCount' => $totalCount,
            'pagination' => [
                'pageSize' => 50,
            ],
        ]);
        // return var_dump($dataProvider->getModels());
        return $this->render("p8", ['dataProvider' => $dataProvider]);
    }
    

}
