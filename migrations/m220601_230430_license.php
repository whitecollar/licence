<?php

use yii\db\Migration;

/**
 * Class m220601_230430_license
 */
class m220601_230430_license extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220601_230430_license cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220601_230430_license cannot be reverted.\n";

        return false;
    }
    */
}
