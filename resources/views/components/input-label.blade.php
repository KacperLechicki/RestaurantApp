@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-xxl text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
