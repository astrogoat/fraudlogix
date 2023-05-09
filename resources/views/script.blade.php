@php
    use Astrogoat\Fraudlogix\Fraudlogix;use Astrogoat\Fraudlogix\Settings\FraudlogixSettings;
    $settings = resolve(FraudlogixSettings::class);
    $fraudlogix = resolve(Fraudlogix::class);
@endphp

@if($settings->enabled && ! blank($settings->qid) && ! blank($settings->cid) && ! blank($fraudlogix->publisherId()))
https://flx1185.lporirxe.com/flp/flcpmin.js?qid={{ $settings->qid }}&cid={{ $settings->cid }}&p1={{ $fraudlogix->publisherId() }}&p4={{ tenant()->id }}
    <script
        type="text/javascript"
        async="async"
        src="https://flx1185.lporirxe.com/flp/flcpmin.js?qid={{ $settings->qid }}&cid={{ $settings->cid }}&p1={{ $fraudlogix->publisherId() }}&p4={{ tenant()->id }}"
    ></script>
@endif
