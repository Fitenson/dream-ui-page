<div class="px-4 sm:px-6 lg:px-8 overflow-x-hidden">
    {{-- Page Header --}}
    <div class="mb-10">
        <h2 class="text-3xl font-bold text-gray-900">Button</h2>
        <p class="mt-2 text-lg text-gray-600">
            Buttons are used to trigger actions. They support multiple styles, sizes, and states.
        </p>
    </div>

    {{-- Layout: Main content centered, sidebar right --}}
    <section class="lg:flex lg:justify-center lg:items-start lg:gap-12 w-full max-w-screen-xl mx-auto">
        {{-- Main Content --}}
        <div class="w-full space-y-8">
            <x-dream-tab-panel default="preview" class="bg-white rounded-xl border border-gray-200 shadow-sm">
                {{-- Tab Buttons --}}
                <div class="px-6 pt-4 w-64">
                    <x-dream-tab-list class="inline-flex space-x-2 gap-4">
                    <x-dream-tab-button
                        class="px-3 py-1.5 text-sm rounded-md"
                        name="preview"
                        active="bg-black text-white"
                        inactive="bg-white text-gray-800 border border-gray-200"
                    >
                        Preview
                    </x-dream-tab-button>
                    <x-dream-tab-button
                        class="px-3 py-1.5 text-sm rounded-md text-center"
                        name="code"
                        active="bg-black text-white"
                        inactive="bg-white text-gray-800 border border-gray-200"
                    >
                        Code
                    </x-dream-tab-button>
                </x-dream-tab-list>
            </div>

            {{-- Tab Content --}}
            <div class="px-6 py-4">
                <x-dream.tabs.tab-section name="preview">
                    <div class="flex space-x-4">
                        <x-dream-button class="bg-blue-600 text-white px-5 py-2.5 rounded-md shadow hover:bg-blue-700 transition">
                            Button
                        </x-dream-button>
                    </div>
                </x-dream.tabs.tab-section>

                <x-dream.tabs.tab-section name="code">
            <pre class="bg-gray-100 text-sm rounded-md overflow-x-auto p-4 leading-relaxed border border-gray-200 max-w-full">
            <code class="text-gray-800">&lt;x-dream-button class="bg-blue-600 text-white px-5 py-2.5 rounded-md hover:bg-blue-700"&gt;
                Click Me
            &lt;/x-dream-button&gt;
            </code>
            </pre>
            </x-dream.tabs.tab-section>
        </div>
        </x-dream-tab-panel>
        </div>

        {{-- Right Sidebar --}}
        <aside
            id="right-sidebar"
            class="mt-10 lg:mt-0 lg:w-96 shrink-0 lg:block hidden self-start sticky top-24"
        >
            <div class="bg-white border border-gray-200 rounded-xl p-4 shadow-sm space-y-4">
                <h4 class="text-lg font-semibold text-gray-900">On this page</h4>
                <ul class="text-lg text-gray-700 space-y-2">
                    <li>
                        <a href="#usage" class="hover:text-blue-600">Usage</a>
                    </li>
                    <li>
                        <a href="#examples" class="hover:text-blue-600 text-lg">Examples</a>
                        <ul class="pl-4 mt-1 list-disc text-gray-600 space-y-1">
                            <li><a href="#sizes" class="hover:text-blue-500 text-lg">Sizes</a></li>
                            <li><a href="#variants" class="hover:text-blue-500 text-lg">Variants</a></li>
                            <li><a href="#states" class="hover:text-blue-500 text-lg">States</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
    </section>
</div>
