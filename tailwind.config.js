import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

const dracula = require('tailwind-dracula/colors');

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
            textColor: (theme) => ({
                'primary': theme('colors.white'),
                'primary-dark': theme('colors.gray.900'),
            }),
        },
    },

    plugins: [forms, require('tailwind-dracula')],
};
