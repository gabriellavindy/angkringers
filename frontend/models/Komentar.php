<?php

namespace frontend\models;

use Yii;
use common\models\User;

/**
 * This is the model class for table "komentar".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_parent
 * @property string $komentar
 *
 * @property User $idUser
 */
class Komentar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'komentar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'komentar'], 'required'],
            [['id_user', 'id_parent'], 'integer'],
            [['komentar'], 'string', 'max' => 255],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Nama User',
            'id_parent' => 'Parent',
            'komentar' => 'Komentar',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
