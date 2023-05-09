<?php

namespace Astrogoat\Fraudlogix;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\Fraudlogix\Fraudlogix
 */
class FraudlogixFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'fraudlogix';
    }
}
