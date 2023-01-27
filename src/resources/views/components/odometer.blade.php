@php($key = "_" . uniqid())
<span id="{{ $key }}" {{ $attributes->merge(["class" => "odometer-item"]) }} data-value="{{ $value ?? 0 }}">0</span>

@once
    @OdometerEasyPlugin()
@endonce