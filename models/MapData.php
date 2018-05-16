<?php

namespace kouosl\map\models;

use Yii;

/**
 * This is the model class for table "map_data".
 *
 * @property integer $id
 * @property string $name
 * @property integer $map_id
 *
 * @property Map $map
 */
class MapData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'map_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'map_id'], 'required'],
            [['map_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['map_id'], 'exist', 'skipOnError' => true, 'targetClass' => Map::className(), 'targetAttribute' => ['map_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'map_id' => 'Map ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMap()
    {
        return $this->hasOne(Map::className(), ['id' => 'map_id']);
    }
}
