import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/Table.css',
                'ressources/js/auto.js',
                'ressources/js/Bot.js',
                'ressources/js/EnemieField.js',
                'ressources/js/markings.js',
                'ressources/js/other.js',
                'ressources/js/table.js',
                'ressources/js/variables_etc.js',



            ],
            refresh: true,
        }),
    ],
});
