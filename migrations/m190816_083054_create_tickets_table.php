<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tickets}}`.
 */
class m190816_083054_create_tickets_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tickets}}', [
            'id' => $this->primaryKey(),
            'row' => $this->integer()->notNull(),
            'place' => $this->integer()->notNull(),
            'cost' => $this->integer()->notNull(),
            'state' => "enum('free','reserved','saled') NOT NULL DEFAULT 'free'",
            'reservation_expiration' => $this->datetime()->defaultValue(NULL),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tickets}}');
    }
}
