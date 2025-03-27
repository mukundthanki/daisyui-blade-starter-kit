@props(['type' => 'success', 'message'])

@if($message)
    <div x-data="{ show: true }"
         x-show="show"
         x-transition
         x-init="setTimeout(() => show = false, 2000)"
         role="alert" {{ $attributes->class(["alert", "alert-success" => $type == 'success', "alert-error" => $type == 'error']) }}>
        <span>{{ $message }}</span>
    </div>
@endif
