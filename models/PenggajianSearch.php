<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Penggajian;

/**
 * PenggajianSearch represents the model behind the search form of `app\models\Penggajian`.
 */
class PenggajianSearch extends Penggajian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'karyawan_id', 'jumlah_gaji', 'jumlah_lembur', 'potongan', 'total_gaji_diterima'], 'integer'],
            [['tanggal', 'keterangan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Penggajian::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'tanggal' => $this->tanggal,
            'karyawan_id' => $this->karyawan_id,
            'jumlah_gaji' => $this->jumlah_gaji,
            'jumlah_lembur' => $this->jumlah_lembur,
            'potongan' => $this->potongan,
            'total_gaji_diterima' => $this->total_gaji_diterima,
        ]);

        $query->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
