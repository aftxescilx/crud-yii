<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "beneficiario".
 *
 * @property int $idBeneficiario
 * @property string $nombre
 * @property string $rfc
 * @property bool|null $estatus
 * @property int|null $idUsuarioCrea
 * @property string|null $fechaCrea
 * @property int|null $idUsuarioModifica
 * @property string|null $fechaModifica
 *
 * @property Donacion[] $donacions
 * @property Usuario $idUsuarioCrea0
 * @property Usuario $idUsuarioModifica0
 */
class Beneficiario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'beneficiario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'rfc'], 'required'],
            // ##[['estatus'], 'boolean'],
            // ##[['idUsuarioCrea', 'idUsuarioModifica'], 'integer'],
            // ##[['fechaCrea', 'fechaModifica'], 'safe'],
            [['nombre'], 'string', 'max' => 50],
            [['rfc'], 'string', 'max' => 13],
            [['rfc'], 'unique'],
/*             ##[['idUsuarioCrea'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::class, 'targetAttribute' => ['idUsuarioCrea' => 'idUsuario']],
            ##[['idUsuarioModifica'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::class, 'targetAttribute' => ['idUsuarioModifica' => 'idUsuario']],
 */        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idBeneficiario' => 'ID',
            'nombre' => 'Nombre',
            'rfc' => 'RFC',
            // 'estatus' => 'Estatus',
            // 'idUsuarioCrea' => 'Id Usuario Crea',
            // 'fechaCrea' => 'Fecha Crea',
            // 'idUsuarioModifica' => 'Id Usuario Modifica',
            // 'fechaModifica' => 'Fecha Modifica',
        ];
    }

    /**
     * Gets query for [[Donacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDonacions()
    {
        return $this->hasMany(Donacion::class, ['idBeneficiario' => 'idBeneficiario']);
    }

    /**
     * Gets query for [[IdUsuarioCrea0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuarioCrea0()
    {
        return $this->hasOne(Usuario::class, ['idUsuario' => 'idUsuarioCrea']);
    }

    /**
     * Gets query for [[IdUsuarioModifica0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuarioModifica0()
    {
        return $this->hasOne(Usuario::class, ['idUsuario' => 'idUsuarioModifica']);
    }
}
