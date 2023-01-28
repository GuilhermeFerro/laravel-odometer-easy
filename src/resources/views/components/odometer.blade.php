@php($key = "_" . uniqid())
<span
    {{ $attributes->merge(["class" => "odometer-item odometer-auto-theme"]) }}
    id="{{ $key }}"
    data-value="{{ $value ?? 0 }}"

    @isset($format)
        data-format="{{ $format }}"
    @endisset

    {{--
    TODO
    @if(!empty($animation) && $animation == false)
        data-animation="false"
    @endif--}}
>0</span>

@once
    @OdometerEasyPlugin()
@endonce
