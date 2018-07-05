<?php

use yii\db\Migration;

/**
 * Handles the creation of table `rate_courses`.
 */
class m180705_122955_create_rate_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('rate_courses', [
            'id' => $this->primaryKey(),
            'content'=> $this->string(200),
            'courses_id' => $this->integer()->unsigned(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('rate_courses');
    }
}
