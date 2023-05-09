<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateFraudlogixSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('fraudlogix.enabled', false);
        // $this->migrator->add('fraudlogix.url', '');
        // $this->migrator->addEncrypted('fraudlogix.access_token', '');
    }

    public function down()
    {
        $this->migrator->delete('fraudlogix.enabled');
        // $this->migrator->delete('fraudlogix.url');
        // $this->migrator->delete('fraudlogix.access_token');
    }
}
