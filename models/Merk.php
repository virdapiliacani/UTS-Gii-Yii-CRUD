<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "merk".
 *
 * @property int $no
 * @property string $merk
 *
 * @property Elektronik[] $elektroniks
 * @property Jenisbarang[] $jenisbarangs
 */
class Merk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'merk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['merk'], 'required'],
            [['merk'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'merk' => 'Merk',
        ];
    }

    /**
     * Gets query for [[Elektroniks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getElektroniks()
    {
        return $this->hasMany(Elektronik::className(), ['no_merk' => 'no']);
    }

    /**
     * Gets query for [[Jenisbarangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getJenisbarangs()
    {
        return $this->hasMany(Jenisbarang::className(), ['no_merk' => 'no']);
    }
}
