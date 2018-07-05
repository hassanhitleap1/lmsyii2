<?php

use yii\db\Migration;

/**
 * Handles the creation of table `levels`.
 */
class m180705_123033_create_levels_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('levels', [
            'id' => $this->primaryKey(),
            'name_en'=> $this->string(),
            'name_ar'=> $this->string(),
            'order' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('levels');
    }
}
