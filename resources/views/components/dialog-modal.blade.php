@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="px-6 py-1">

        <div class="mt-4 text-sm text-gray-600">
            {{ $content }}
        </div>

    </div>
</x-modal>
