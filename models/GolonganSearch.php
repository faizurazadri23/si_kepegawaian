<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Golongan;

/**
 * GolonganSearch represents the model behind the search form of `app\models\Golongan`.
 */
class GolonganSearch extends Golongan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'gaji_pokok', 'tunjangan_istri', 'tunjangan_anak', 'tunjangan_transport', 'tunjangan_makan'], 'integer'],
            [['nama_golongan'], 'safe'],
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
        $query = Golongan::find();

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
            'gaji_pokok' => $this->gaji_pokok,
            'tunjangan_istri' => $this->tunjangan_istri,
            'tunjangan_anak' => $this->tunjangan_anak,
            'tunjangan_transport' => $this->tunjangan_transport,
            'tunjangan_makan' => $this->tunjangan_makan,
        ]);

        $query->andFilterWhere(['like', 'nama_golongan', $this->nama_golongan]);

        return $dataProvider;
    }
}
