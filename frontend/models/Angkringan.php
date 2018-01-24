<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "angkringan".
 *
 * @property integer $id
 * @property string $nama
 * @property string $nama_pemilik
 * @property string $lokasi
 * @property string $keterangan
 *
 * @property Makanan[] $makanans
 */
class Angkringan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'angkringan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'nama_pemilik', 'lokasi', 'keterangan'], 'required'],
            [['nama', 'nama_pemilik'], 'string', 'max' => 100],
            [['lokasi'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'nama_pemilik' => 'Nama Pemilik',
            'lokasi' => 'Lokasi',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMakanans()
    {
        return $this->hasMany(Makanan::className(), ['id_angkringan' => 'id']);
    }
}
