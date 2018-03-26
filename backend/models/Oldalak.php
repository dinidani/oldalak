<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "oldalak".
 *
 * @property int $id
 * @property string $cim
 * @property string $link
 * @property string $meta_leiras
 * @property string $meta_kulcsszavak
 * @property string $torzs
 */
class Oldalak extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'oldalak';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cim', 'link', 'meta_leiras', 'meta_kulcsszavak', 'torzs'], 'required'],
            [['id'], 'integer'],
            [['torzs'], 'string'],
            [['cim'], 'string', 'max' => 500],
            [['link'], 'string', 'max' => 250],
            [['meta_leiras', 'meta_kulcsszavak'], 'string', 'max' => 200],
            [['id'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cim' => 'Cim',
            'link' => 'Link',
            'meta_leiras' => 'Meta Leiras',
            'meta_kulcsszavak' => 'Meta Kulcsszavak',
            'torzs' => 'Torzs',
        ];
    }
}
