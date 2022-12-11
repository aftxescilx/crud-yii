<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Beneficiario;

/**
 * BeneficiarioSearch represents the model behind the search form of `app\models\Beneficiario`.
 */
class BeneficiarioSearch extends Beneficiario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idBeneficiario', 'idUsuarioCrea', 'idUsuarioModifica'], 'integer'],
            [['nombre', 'rfc', 'fechaCrea', 'fechaModifica'], 'safe'],
            [['estatus'], 'boolean'],
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
        $query = Beneficiario::find();

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
            'idBeneficiario' => $this->idBeneficiario,
            'estatus' => $this->estatus,
            'idUsuarioCrea' => $this->idUsuarioCrea,
            'fechaCrea' => $this->fechaCrea,
            'idUsuarioModifica' => $this->idUsuarioModifica,
            'fechaModifica' => $this->fechaModifica,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'rfc', $this->rfc]);

        return $dataProvider;
    }
}
