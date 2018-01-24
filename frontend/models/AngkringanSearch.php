<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Angkringan;

/**
 * This is the model class for table "angkringan".
 *
 * @property integer $id
 * @property string $nama
 * @property string $nama_pemilik
 * @property string $lokasi
 * @property string $keterangan
 *
 * @property Makanan[] $makanans
 */
class AngkringanSearch extends Angkringan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'nama_pemilik', 'lokasi', 'keterangan'], 'safe'],
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
        $query = Angkringan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'nama' => $this->nama,
            'nama_pemilik' => $this->nama_pemilik,
            'lokasi' => $this->lokasi,
            'keterangan' => $this->keterangan,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi]);

        return $dataProvider;
    }
}
