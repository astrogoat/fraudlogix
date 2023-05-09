<?php

namespace Astrogoat\Fraudlogix\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;
use Astrogoat\Fraudlogix\Actions\FraudlogixAction;

class FraudlogixSettings extends AppSettings
{
    // public string $url;

    public function rules(): array
    {
        return [
            // 'url' => Rule::requiredIf($this->enabled === true),
        ];
    }

    // protected static array $actions = [
    //     FraudlogixAction::class,
    // ];

    // public static function encrypted(): array
    // {
    //     return ['access_token'];
    // }

    public function description(): string
    {
        return 'Interact with Fraudlogix.';
    }

    public static function group(): string
    {
        return 'fraudlogix';
    }
}
