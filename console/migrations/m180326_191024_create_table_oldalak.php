<?php

use yii\db\Migration;

class m180326_191024_create_table_oldalak extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%oldalak}}', [
            'id' => $this->integer(11)->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'cim' => $this->string(500)->notNull(),
            'link' => $this->string(250)->notNull(),
            'meta_leiras' => $this->string(200)->notNull(),
            'meta_kulcsszavak' => $this->string(200)->notNull(),
            'torzs' => $this->text()->notNull(),
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('{{%oldalak}}');
    }
}
