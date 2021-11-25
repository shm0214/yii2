<?php

use yii\db\Migration;

/**
 * Class m211125_064431_init_rbac
 */
class m211125_064431_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $super = $auth->createPermission('super');
        $super->description = 'super admin';
        $auth->add($super);

        $managePost = $auth->createPermission('managePost');
        $managePost->description = 'manage post';
        $auth->add($managePost);

        $speak = $auth->createPermission('speak');
        $speak->description = 'Leaving a message';
        $auth->add($speak);

        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $super);
        $auth->addChild($admin, $managePost);
        $auth->addChild($admin, $speak);

        $poster = $auth->createRole('poster');
        $auth->add($poster);
        $auth->addChild($poster, $managePost);
        $auth->addChild($poster, $speak);

        $speaker = $auth->createRole('speaker');
        $auth->add($speaker);
        $auth->addChild($speaker, $speak);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211125_064431_init_rbac cannot be reverted.\n";
        $auth = Yii::$app->authManager;

        $auth->removeAll();
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m211125_064431_init_rbac cannot be reverted.\n";

        return false;
    }
    */
}
