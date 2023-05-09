<?php

namespace Astrogoat\Fraudlogix\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class FraudlogixSettings extends AppSettings
{
     public string $qid;
     public string $cid;

    public function rules(): array
    {
        return [
             'qid' => Rule::requiredIf($this->enabled === true),
             'cid' => Rule::requiredIf($this->enabled === true),
        ];
    }

    public function labels(): array
    {
        return [
            'qid' => 'Account ID (qid)',
            'cid' => 'Client ID (cid)',
        ];
    }

    public function help(): array
    {
        return [
            'qid' => 'Provided by Fraudlogix',
            'cid' => 'Provided by Fraudlogix',
        ];
    }

    public function description(): string
    {
        return 'Interact with Fraudlogix.';
    }

    public static function group(): string
    {
        return 'fraudlogix';
    }
}
