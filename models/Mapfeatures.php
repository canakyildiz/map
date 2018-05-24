<?php

namespace kouosl\map\models;

use Yii;

/**
 * This is the model class for table "{{%mapfeatures}}".
 *
 * @property int $id
 * @property int $mapId
 * @property string $coordinate
 * @property string $tag
 *
 * @property Map $map
 */
class Mapfeatures extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%mapfeatures}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mapId', 'coordinate', 'tag'], 'required'],
            [['mapId'], 'integer'],
            [['tag'], 'string'],
            [['coordinate'], 'string', 'max' => 200],
            [['mapId'], 'exist', 'skipOnError' => true, 'targetClass' => Map::className(), 'targetAttribute' => ['mapId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mapId' => 'Map ID',
            'coordinate' => 'Coordinate',
            'tag' => 'Tag',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMap()
    {
        return $this->hasOne(Map::className(), ['id' => 'mapId']);
    }
}
