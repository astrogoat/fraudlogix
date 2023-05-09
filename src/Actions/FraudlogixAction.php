<?php

namespace Astrogoat\Fraudlogix\Actions;

use Helix\Lego\Apps\Actions\Action;

class FraudlogixAction extends Action
{
    public static function actionName(): string
    {
        return 'Fraudlogix action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
