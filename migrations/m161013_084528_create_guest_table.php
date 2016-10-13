<?php

use yii\db\Migration;

/**
 * Handles the creation for table `guest`.
 */
class m161013_084528_create_guest_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('guest', [
            'id' => $this->primaryKey(),
            'url' => $this->string(),
            'name' => $this->string(),
            'text' => $this->string(),
            'email' => $this->string(),
            'ip' => $this->string(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('guest');
    }
}
