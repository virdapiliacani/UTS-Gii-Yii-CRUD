<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kos".
 *
 * @property int $no_kamar
 * @property string $nama_panggilan
 *
 * @property Identitas $namaPanggilan
 */
class Kos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_panggilan'], 'required'],
            [['nama_panggilan'], 'string', 'max' => 20],
            [['nama_panggilan'], 'exist', 'skipOnError' => true, 'targetClass' => Identitas::className(), 'targetAttribute' => ['nama_panggilan' => 'nama_panggilan']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_kamar' => 'No Kamar',
            'nama_panggilan' => 'Nama Panggilan',
        ];
    }

    /**
     * Gets query for [[NamaPanggilan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNamaPanggilan()
    {
        return $this->hasOne(Identitas::className(), ['nama_panggilan' => 'nama_panggilan']);
    }
}
