<?php

use yii\db\Migration;

/**
 * Handles the creation of table `comments`.
 */
class m180705_122855_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'content'=> $this->string(200),
            'time' => $this->double(),
            'user_id' => $this->integer()->unsigned(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('comments');
    }
}
