<?php

use yii\db\Migration;

/**
 * Handles the creation of table `my_courses`.
 */
class m180705_123056_create_my_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('my_courses', [
            'id' => $this->primaryKey(),

            'course_id' => $this->integer()->unsigned(),
            'user_id' => $this->integer()->unsigned(),
            'buy_date' => $this->dateTime(),
            'expiry_date' => $this->dateTime(),
            'status' => $this->smallInteger(200),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('my_courses');
    }
}
