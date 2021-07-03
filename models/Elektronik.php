<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "elektronik".
 *
 * @property int $no
 * @property string $keterangan
 * @property int $no_jenisbrg
 * @property int $no_merk
 *
 * @property Jenisbarang $noJenisbrg
 * @property Merk $noMerk
 */
class Elektronik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'elektronik';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keterangan', 'no_jenisbrg', 'no_merk'], 'required'],
            [['no_jenisbrg', 'no_merk'], 'integer'],
            [['keterangan'], 'string', 'max' => 20],
            [['no_jenisbrg'], 'exist', 'skipOnError' => true, 'targetClass' => Jenisbarang::className(), 'targetAttribute' => ['no_jenisbrg' => 'no']],
            [['no_merk'], 'exist', 'skipOnError' => true, 'targetClass' => Merk::className(), 'targetAttribute' => ['no_merk' => 'no']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No.',
            'keterangan' => 'Keterangan',
            'no_merk' => 'Merk Barang',
			'no_jenisbrg' => 'Jenis Barang',
        ];
    }

    /**
     * Gets query for [[NoJenisbrg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoJenisbrg()
    {
        return $this->hasOne(Jenisbarang::className(), ['no' => 'no_jenisbrg']);
    }

    /**
     * Gets query for [[NoMerk]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNoMerk()
    {
        return $this->hasOne(Merk::className(), ['no' => 'no_merk']);
    }
}
