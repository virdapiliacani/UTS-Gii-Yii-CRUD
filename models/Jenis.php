<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;
/**
 * This is the model class for table "jenis".
 *
 * @property int $id_jenis
 * @property string $nama_jenis
 * @property string $keterangan
 *
 * @property Barang[] $barangs
 */
class Jenis extends \yii\db\ActiveRecord
{
	public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_jenis', 'keterangan'], 'required'],
			['img','string', 'max' => 300],
			['image', 'file', 'extensions' => 'jpg, jpeg, png'],
            [['nama_jenis', 'keterangan'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jenis' => 'Id Jenis',
            'nama_jenis' => 'Nama Jenis',
            'keterangan' => 'Keterangan',
			'img' => 'Gambar',
        ];
    }

    /**
     * Gets query for [[Barangs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBarangs()
    {
        return $this->hasMany(Barang::className(), ['id_jenis' => 'id_jenis']);
    }
}
