{{-- resources/views/components/preview-canvas.blade.php --}}
@props(['title' => null])

<x-dream-card class="preview-canvas mb-6">
    <div x-data="{ tab: 'preview' }">
        @if ($title)
            <h3 class="text-lg font-semibold mb-4">{{ $title }}</h3>
        @endif

        <div class="flex border-b border-gray-200 mb-4">
            <button
                class="px-4 py-2 text-sm font-medium"
                :class="{ 'border-b-2 border-blue-500 text-blue-600': tab === 'preview' }"
                @click="tab = 'preview'"
            >
                Preview
            </button>
            <button
                class="px-4 py-2 text-sm font-medium"
                :class="{ 'border-b-2 border-blue-500 text-blue-600': tab === 'code' }"
                @click="tab = 'code'"
            >
                Code
            </button>
        </div>

        <div x-show="tab === 'preview'" class="mb-4">
            {{ $preview }}
        </div>

        <div x-show="tab === 'code'">
            <pre class="bg-gray-100 p-4 rounded text-sm overflow-auto">
                <code class="language-html">{{ $code }}</code>
            </pre>
        </div>
    </div>
</x-dream-card>
