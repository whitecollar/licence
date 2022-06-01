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

    public function up()
    {
//Добавляем все необходимые поля
        $this->createTable('license', [
            'id' => $this->primaryKey()->notNull(),
            'name' => $this->char(255)->defaultValue(null),
            'serial' => $this->char(255)->defaultValue(null),
            'public_key' => $this->char(255)->defaultValue(null),
            'private_key' => $this->char(255)->defaultValue(null),
            'status' => $this->char(255)->defaultValue(null),
            'mail' => $this->char(255)->defaultValue(null),
            'commit' => $this->char(255)->defaultValue(null),
            'id_member' => $this->char(255)->defaultValue(null),
            'type' => $this->char(255)->defaultValue(null),
            'inn' => $this->char(255)->defaultValue(null),
            'payment' => $this->char(255)->defaultValue(null),
            'valid_date' => $this->char(255)->defaultValue(null),
            'date_start' => $this->char(255)->defaultValue(null),
            'temp1' => $this->char(255)->defaultValue(null),
            'temp2' => $this->char(255)->defaultValue(null),
            'temp3' => $this->char(255)->defaultValue(null),
            'temp4' => $this->char(255)->defaultValue(null),
            'temp5' => $this->char(255)->defaultValue(null),
            'temp6' => $this->char(255)->defaultValue(null),
            'lic_type' => $this->integer(),
            'temp7' => $this->integer(),
            'temp8' => $this->integer(),
            'temp9' => $this->integer(),
           
        ]);

    }
  public function down()
      {
          $this->dropTable('scor');
         
      }

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
