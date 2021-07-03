<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jenisbarang".
 *
 * @property int $no
 * @property int $no_merk
 * @property string $jenisbrg
 *
 * @property Elektronik[] $elektroniks
 * @property Merk $noMerk
 */
class Jenisbarang extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenisbarang';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_merk', 'jenisbrg'], 'required'],
            [['no_merk'], 'integer'],
            [['jenisbrg'], 'string', 'max' => 20],
            [['no_merk'], 'exist', 'skipOnError' => true, 'targetClass' => Merk::className(), 'targetAttribute' => ['no_merk' => 'no']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'no_merk' => 'No Merk',
            'jenisbrg' => 'Jenis Barang',
        ];
    }

    /**
     * Gets query for [[Elektroniks]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getElektroniks()
    {
        return $this->hasMany(Elektronik::className(), ['no_jenisbrg' => 'no']);
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
	
	 public static function getJenisbarangList($no_, $dependent=false)
    {
		$subCategory = self::find()
			->select(['jenisbrg as name', 'no'])
			->where(['no_merk' => $no_])
			->asArray()
			->all();
        return $subCategory;
    }
	
	
	
}
