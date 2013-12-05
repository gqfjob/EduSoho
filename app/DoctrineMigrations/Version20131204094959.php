<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20131204094959 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        // 同一帐号只能在一个地方登陆,user表添加记录当前用户sessionid字段
        $this->addSQL("
    		ALTER TABLE  `user` ADD  `loginSessionId` VARCHAR( 255 ) NOT NULL;
    		");

    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs

    }
}