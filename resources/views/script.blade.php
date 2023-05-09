@php
    use Astrogoat\Fraudlogix\Fraudlogix;use Astrogoat\Fraudlogix\Settings\FraudlogixSettings;
    $settings = resolve(FraudlogixSettings::class);
    $fraudlogix = resolve(Fraudlogix::class);
@endphp

@if($settings->enabled && ! blank($settings->qid) && ! blank($settings->cid) && ! blank($fraudlogix->affiliateId()))
    <script
        type="text/javascript"
        async="async"
        src="https://flx1185.lporirxe.com/flp/flcpmin.js?qid={{ $settings->qid }}&cid={{ $settings->cid }}&p1={{ $fraudlogix->affiliateId() }}&p3={{ tenant()->id }}{{ ! blank($fraudlogix->transactionId()) ? '&p4=' . $fraudlogix->transactionId() : '' }}"
    ></script>
@endif
