<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 * 
 * command
 *  php yii migrate/create create_users_table --fields="email:string(256):notNull,password:string(256):notNull,
 * auth_key:string(128):defaultValue(NULL),access_token:string(128):defaultValue(NULL)"
 * 
 */
class m190816_082336_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'email' => $this->string(256)->notNull(),
            'password' => $this->string(256)->notNull(),
            'auth_key' => $this->string(128)->defaultValue(NULL),
            'access_token' => $this->string(128)->defaultValue(NULL),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
