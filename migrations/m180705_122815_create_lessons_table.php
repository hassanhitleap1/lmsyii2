<?php

use yii\db\Migration;

/**
 * Handles the creation of table `lessons`.
 */
class m180705_122815_create_lessons_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('lessons', [
            'id' => $this->primaryKey(),
            'name_en' => $this->string(),
            'name_ar' => $this->string(),
            'desc_en' => $this->string(200),
            'desc_ar' => $this->string(200),
            'content'=> $this->string(200),
            'time' => $this->double(),
            'unit_id' => $this->integer()->unsigned(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('lessons');
    }
}
