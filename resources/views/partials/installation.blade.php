<section id="installation-docs" class="space-y-6">
    <div class="prose max-w-none">
        <h2 class="text-2xl font-bold text-gray-800">Installation</h2>
        <p>
            Follow these steps to install <strong>Dream UI</strong> in your Laravel project.
        </p>

        <h3 class="text-xl font-semibold text-gray-700">1. Install via Composer</h3>
        <pre class="bg-gray-100 text-sm rounded-md overflow-x-auto p-4 leading-relaxed border border-gray-200">
<code class="text-gray-800">composer require fitenson/dream:dev-main</code>
        </pre>

        <h3 class="text-xl font-semibold text-gray-700">2. Download Components</h3>
        <pre class="bg-gray-100 text-sm rounded-md overflow-x-auto p-4 leading-relaxed border border-gray-200">
<code class="text-gray-800">php artisan dream:install</code>
        </pre>

        <h3 class="text-xl font-semibold text-gray-700">3. Usage</h3>
        <p>
            You can now use Dream UI components like:
        </p>
        <pre class="bg-gray-100 text-sm rounded-md overflow-x-auto p-4 leading-relaxed border border-gray-200">
<code class="text-gray-800">&lt;x-dream-button class="bg-blue-600 text-white px-4 py-2 rounded"&gt;
    Click Me
&lt;/x-dream-button&gt;
</code>
    </div>

    <div>
        <x-dream-button onclick="showDocs('intro-docs')" class="bg-gray-800 text-white hover:bg-gray-700">
            ← Back to Introduction
        </x-dream-button>
    </div>
</section>
