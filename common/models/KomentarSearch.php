<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Komentar;

/**
 * This is the model class for table "komentar".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_angkringan
 * @property string $komentar
 *
 * @property User $idUser
 */
class KomentarSearch extends Komentar
{

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_angkringan'], 'integer'],
            [['id_user', 'komentar'], 'safe'],
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
        $query = Komentar::find()->joinWith('idUser');

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
            'id_user' => $this->id_user,
            'id_angkringan' => $this->id_angkringan,
        ]);

        $query->andFilterWhere(['like', 'komentar', $this->komentar]);

        return $dataProvider;
    }
}
