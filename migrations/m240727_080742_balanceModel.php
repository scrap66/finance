<?php

use yii\db\Migration;

/**
 * Class m240727_080742_balanceModel
 */
class m240727_080742_balanceModel extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%balance}}',[
            'id' => $this->primaryKey(),
            'balance' => $this->float(),
            'date_update' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
       $this->dropTable('{{%balance}}');
    }
}
