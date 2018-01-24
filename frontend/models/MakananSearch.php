<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Makanan;

/**
 * This is the model class for table "makanan".
 *
 * @property integer $id
 * @property integer $id_angkringan
 * @property string $nama
 * @property double $harga
 * @property string $gambar
 *
 * @property Angkringan $idAngkringan
 */
class MakananSearch extends Makanan
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_angkringan'], 'integer'],
            [['id_angkringan', 'nama', 'harga', 'gambar'], 'safe'],
            [['nama'], 'string', 'max' => 100],
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
        $query = Makanan::find()->joinWith('idAngkringan');

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
            'id_angkringan' => $this->id_angkringan,
            'harga' => $this->harga,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
}
