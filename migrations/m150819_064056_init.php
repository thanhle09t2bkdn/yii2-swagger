<?php

use yii\db\Schema;
use yii\db\Migration;

class m150819_064056_init extends Migration
{
    public function up()
    {
        $this->execute(file_get_contents(dirname(__DIR__).'/databases/db.sql'));

    }

    public function down()
    {
        echo "m150819_064056_init cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
