<?php

use yii\db\Migration;

/**
 * Handles the creation of table `units`.
 */
class m180705_122623_create_units_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('units', [
            'id' => $this->primaryKey(),
            'name_en' => $this->string(),
            'name_ar' => $this->string(),
            'desc_en' => $this->string(200),
            'desc_ar' => $this->string(200),
            'time' => $this->double(),
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
        $this->dropTable('units');
    }
}
