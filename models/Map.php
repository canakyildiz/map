<?php

namespace kouosl\map\models;

use Yii;

/**
 * This is the model class for table "{{%map}}".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $created_at
 *
 * @property Mapfeatures[] $mapfeatures
 */
class Map extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%map}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description'], 'required'],
            [['description'], 'string'],
            [['created_at'], 'safe'],
            [['name'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMapfeatures()
    {
        return $this->hasMany(Mapfeatures::className(), ['mapId' => 'id']);
    }
}
