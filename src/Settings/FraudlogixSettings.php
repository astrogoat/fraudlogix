<?php

namespace Astrogoat\Fraudlogix\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class FraudlogixSettings extends AppSettings
{
     public string $qid;
     public string $cid;
     public string $transaction_id;

    public function rules(): array
    {
        return [
             'qid' => Rule::requiredIf($this->enabled === true),
             'cid' => Rule::requiredIf($this->enabled === true),
             'transaction_id' => ['nullable'],
        ];
    }

    public function labels(): array
    {
        return [
            'qid' => 'Account ID (qid)',
            'cid' => 'Client ID (cid)',
            'transaction_id' => 'Transaction ID',
        ];
    }

    public function help(): array
    {
        return [
            'qid' => 'Provided by Fraudlogix',
            'cid' => 'Provided by Fraudlogix',
            'transaction_id' => 'If the provided transaction ID is found the query string, the value will passed along to Fraudlogix. <br>Example: use "irclickid" as the Transaction ID, then if a user visits a page with "?irclickid=12345" in the query string, then "12345" will be passed along to Fraudlogix.',
        ];
    }

    public function hints(): array
    {
        return [
            'qid' => '(required)',
            'cid' => '(required)',
            'transaction_id' => '(optional)',
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
