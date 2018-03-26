<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Oldalak;

/**
 * OldalakSearch represents the model behind the search form of `app\models\Oldalak`.
 */
class OldalakSearch extends Oldalak
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['cim', 'link', 'meta_leiras', 'meta_kulcsszavak', 'torzs'], 'safe'],
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
        $query = Oldalak::find();

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
        ]);

        $query->andFilterWhere(['like', 'cim', $this->cim])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'meta_leiras', $this->meta_leiras])
            ->andFilterWhere(['like', 'meta_kulcsszavak', $this->meta_kulcsszavak])
            ->andFilterWhere(['like', 'torzs', $this->torzs]);

        return $dataProvider;
    }
}
