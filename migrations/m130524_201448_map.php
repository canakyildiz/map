<?php

use yii\db\Schema;
use yii\db\Migration;

class m130524_201448_map extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%map}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(200)->notNull(),
            'description' => $this->text()->notNull(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
        ], $tableOptions);
        $this->createTable('{{%mapFeatures}}', [
            'id' => $this->primaryKey(),
            'mapId' => $this->integer()->notNull(),
            'coordinate' => $this->string(200)->notNull(),
            'tag' => $this->text()->notNull(),
        ], $tableOptions);

        $this->addForeignKey(
            'fk-pmapFeatures_map_id',
            'mapFeatures',
            'mapId',
            'map',
            'id',
            'CASCADE'
        );

    }

    public function down()
    {
        $this->dropForeignKey(
            'fk-pmapFeatures_map_id',
            'mapFeatures'
        );
        $this->dropTable('mapFeatures');
        $this->dropTable('map');
    }
}
