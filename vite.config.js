const path = require('path');
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    root: path.resolve(__dirname, 'src'),
    publicDir: '../src/',
    base: './',
    server:
    {
        host: true
    },
    build:
    {
        outDir: '../dist',
        emptyOutDir: true,
        sourcemap: true
    }
});