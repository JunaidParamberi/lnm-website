import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: 'localhost', // Change if you need to access the dev server from a specific IP
        port: 5173,
    },
    build: {
        outDir: 'public/build',
    },
    base: process.env.APP_URL || '/', // Use APP_URL for production base path
});
