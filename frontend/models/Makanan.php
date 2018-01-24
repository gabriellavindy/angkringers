<?php

namespace frontend\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "makanan".
 *
 * @property integer $id
 * @property integer $id_angkringan
 * @property string $nama
 * @property double $harga
 * @property string $gambar
 *
 * @property Angkringan $idAngkringan
 */
class Makanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'makanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_angkringan', 'nama', 'harga'], 'required'],
            [['id_angkringan'], 'integer'],
            [['harga'], 'number'],
            [['nama'], 'string', 'max' => 100],
            [['gambar'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['id_angkringan'], 'exist', 'skipOnError' => true, 'targetClass' => Angkringan::className(), 'targetAttribute' => ['id_angkringan' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_angkringan' => 'Nama Angkringan',
            'nama' => 'Nama',
            'harga' => 'Harga',
            'gambar' => 'Gambar',
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {
            $this->gambar->saveAs($this->gambar->baseName.'.'.$this->gambar->extension, '/file/' . $this->gambar->baseName.'.'.$this->gambar->extension);
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdAngkringan()
    {
        return $this->hasOne(Angkringan::className(), ['id' => 'id_angkringan']);
    }
}
