<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateFraudlogixSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('fraudlogix.enabled', false);
         $this->migrator->add('fraudlogix.qid', '');
         $this->migrator->add('fraudlogix.cid', '');
    }

    public function down()
    {
        $this->migrator->delete('fraudlogix.enabled');
        $this->migrator->delete('fraudlogix.qid');
        $this->migrator->delete('fraudlogix.cid');
    }
}
