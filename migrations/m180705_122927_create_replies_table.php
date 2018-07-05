<?php

use yii\db\Migration;

/**
 * Handles the creation of table `replies`.
 */
class m180705_122927_create_replies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('replies', [
            'id' => $this->primaryKey(),
            'content'=> $this->string(200),
            'comment_id' => $this->integer()->unsigned(),
            'user_id' => $this->integer()->unsigned(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('replies');
    }
}
