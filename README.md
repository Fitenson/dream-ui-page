Dream UI for Laravel
Dream UI is a clean, modern, and reusable component library built specifically for Laravel Blade. It provides customizable UI elements designed to speed up your frontend development.

🚀 Installation
Follow these steps to install and start using Dream UI in your Laravel project.

1. Install via Composer
Run the following command in your Laravel project root directory:

bash
Copy
Edit
composer require fitenson/dream:dev-main
Note: You may need to allow dev stability or set minimum-stability to dev in your composer.json.

2. Publish Components
Once installed, publish the Dream UI components using the Artisan command:

bash
Copy
Edit
php artisan dream:install
This will publish the available Blade components to your project so you can begin using them immediately.

✨ Usage
You can now use Dream UI components in your Blade templates. For example, to render a styled button:

blade
Copy
Edit
<x-dream-button class="bg-blue-600 text-white px-4 py-2 rounded">
    Click Me
</x-dream-button>
Dream UI components are designed to be flexible and Tailwind-compatible, allowing you to fully customize them via class attributes.

📚 Documentation
More detailed documentation is available in the official docs (coming soon).

🛠️ Requirements
Laravel 9 or higher

Tailwind CSS (for styling support)

🤝 Contributing
Contributions are welcome! If you’d like to improve or add new components, feel free to fork the repository and submit a pull request.

📄 License
Dream UI is open-source and licensed under the MIT License.
