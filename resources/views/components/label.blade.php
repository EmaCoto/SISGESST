@props(['value'])

<label {{ $attributes->merge(['class' => 'ml-1 block font-semibold font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }}
</label>
