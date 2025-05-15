<section id="button-docs" class="hidden space-y-6">
    <div class="space-y-2">
        <x-dream-title level="3" class="text-xl font-semibold text-gray-800">Button</x-dream-title>
        <x-dream-text class="text-gray-600">Displays as a button or a button-like component for triggering actions.</x-dream-text>
    </div>

    <x-dream-tab-panel default="preview" class="bg-white rounded-lg shadow-sm border border-gray-200">
        <x-dream-tab-list class="bg-gray-50 border-b border-gray-200 px-4 pt-2">
            <x-dream-tab-button name="preview" class="py-2 px-4 text-sm font-medium rounded-t-md transition hover:text-blue-600">Preview</x-dream-tab-button>
            <x-dream-tab-button name="code" class="py-2 px-4 text-sm font-medium rounded-t-md transition hover:text-blue-600">Code</x-dream-tab-button>
        </x-dream-tab-list>

        <div class="p-6">
            <x-dream.tabs.tab-section name="preview">
                <div class="flex justify-start">
                    <x-dream-button class="bg-blue-600 text-white px-5 py-2.5 rounded-md shadow hover:bg-blue-700 transition">Click Me</x-dream-button>
                </div>
            </x-dream.tabs.tab-section>

            <x-dream.tabs.tab-section name="code">
                <pre class="bg-gray-100 text-sm rounded-md overflow-x-auto p-4 leading-relaxed border border-gray-200">
<code class="text-gray-800">&lt;x-dream-button class="bg-blue-600 text-white px-5 py-2.5 rounded-md hover:bg-blue-700"&gt;
    Click Me
&lt;/x-dream-button&gt;
</code>
                </pre>
            </x-dream.tabs.tab-section>
        </div>
    </x-dream-tab-panel>
</section>
