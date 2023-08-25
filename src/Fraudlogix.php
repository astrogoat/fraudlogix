<?php

namespace Astrogoat\Fraudlogix;

use Astrogoat\Fraudlogix\Settings\FraudlogixSettings;

class Fraudlogix
{
    public function affiliateId(): ?string
    {
        return request()->query('utm_content');
    }

    public function transactionId(): ?string
    {
        return request()->query(resolve(FraudlogixSettings::class)->transaction_id);
    }

    //    /**
    //     * Replace the `affiliateId` method with this one if we
    //     * need to ping Fraudlogix on all subsequent request
    //     * after a user visit with the utm_content param.
    //     * @return string
    //     */
    //    public function affiliateId(): string
    //    {
    //        $cacheKey = 'astrogoat:fraudlogix:' . strata_user_id() . ':affiliateId';
    //        $tags = ['astrogoat', 'fraudlogix', 'affiliateId'];
    //
    //        $utmContentQuery = request()->query('utm_content');
    //
    //        // Store and return LATEST utm_content parameter.
    //        if (! blank($utmContentQuery)) {
    //            \Illuminate\Support\Facades\Cache::tags($tags)
    //                ->put($cacheKey, $utmContentQuery, now()->addHour());
    //
    //            return $utmContentQuery;
    //        }
    //
    //        // Retrieve and return latest STORED utm_content parameter.
    //        // This is useful on subsequent page views where the utm
    //        // is no longer in the query string, but we fetch it.
    //        if (\Illuminate\Support\Facades\Cache::tags($tags)->has($cacheKey)) {
    //            return \Illuminate\Support\Facades\Cache::tags($tags)->get($cacheKey);
    //        }
    //
    //        // No utm_content has been recorded for the user yet.
    //        return '';
    //    }
}
