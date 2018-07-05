<?php

use yii\db\Migration;

/**
 * Handles the creation of table `courses`.
 */
class m180705_122525_create_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('courses', [
            'id' => $this->primaryKey(),
            'name'=>$this->string(),
            'description'=>$this->string(200),
            'teacher_id'=>$this->integer()->unsigned(),
            'level_id'=>$this->integer()->unsigned(),
            'time'=>$this->double(),
            'created_at'=>$this->dateTime(),
            'updated_at'=>$this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('courses');
    }
}
