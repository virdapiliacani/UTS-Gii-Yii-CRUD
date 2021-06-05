<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "identitas".
 *
 * @property string $nama_lengkap
 * @property string $nama_panggilan
 * @property string $jekel
 * @property string $daerah_asal
 * @property string $tgl_lahir
 * @property string $tmpt_kuliah
 *
 * @property Kos[] $kos
 */
class Identitas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'identitas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_lengkap', 'nama_panggilan', 'jekel', 'daerah_asal', 'tgl_lahir', 'tmpt_kuliah'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['nama_lengkap', 'daerah_asal', 'tmpt_kuliah'], 'string', 'max' => 50],
            [['nama_panggilan'], 'string', 'max' => 20],
            [['jekel'], 'string', 'max' => 15],
            [['nama_panggilan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nama_lengkap' => 'Nama Lengkap',
            'nama_panggilan' => 'Nama Panggilan',
            'jekel' => 'Jenis Kelamin',
            'daerah_asal' => 'Daerah Asal',
            'tgl_lahir' => 'Tanggal Lahir',
            'tmpt_kuliah' => 'Tempat Kuliah',
        ];
    }

    /**
     * Gets query for [[Kos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getKos()
    {
        return $this->hasMany(Kos::className(), ['nama_panggilan' => 'nama_panggilan']);
    }
}
