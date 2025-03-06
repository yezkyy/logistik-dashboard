import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#118B50', // Warna utama
                secondary: '#5DB996', // Warna pendukung 1
                accent: '#E3F0AF', // Warna pendukung 2
                lightgreen: '#F7FBF8', // Warna latar belakang terang
            },
        },
    },

    plugins: [forms],
};