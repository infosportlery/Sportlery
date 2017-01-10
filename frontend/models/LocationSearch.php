<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Location;
use app\models\PaidLocation;
use yii\data\SqlDataProvider;

/**
 * LocationSearch represents the model behind the search form about `app\models\Location`.
 */
class LocationSearch extends Location
{
    public $globalSearch;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type'], 'integer'],
            [['name', 'street', 'zipcode', 'company_name', 'description', 'category', 'price', 'avatar', 'city', 'globalSearch'], 'safe'],
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
        $query = Location::find();

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

        $query->orFilterWhere(['like', 'street', $this->globalSearch])
            ->orFilterWhere(['like', 'zipcode', $this->globalSearch])
            ->orFilterWhere(['like', 'price', $this->globalSearch])
            ->orFilterWhere(['like', 'category', $this->globalSearch])
            ->orFilterWhere(['like', 'city', $this->globalSearch]);

        $query->orFilterWhere(['like', 'name', $this->name])
            ->orFilterWhere(['like', 'city', $this->city])
            ->orFilterWhere(['like', 'category', $this->category])
            ->orFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }

    public function paidSearch()
    {

        $query = PaidLocation::find();

        $paidProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $paidProvider;
    }
}
