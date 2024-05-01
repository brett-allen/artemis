import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                'bondi-blue': { 50: '#5FF5FF', 100: '#4AF4FF', 200: '#21F2FF', 300: '#00E9F8', 400: '#00C2CF', 500: '#009CA6', 600: '#00676E', 700: '#003336', 800: '#000000', 900: '#000000', 950: '#000000' },
                'cream-can': { 50: '#FFFFFF', 100: '#FEF9EC', 200: '#FCEEC5', 300: '#FBE29E', 400: '#F9D777', 500: '#F7CB50', 600: '#F5BB1A', 700: '#CD9A09', 800: '#987207', 900: '#624904', 950: '#473503' },
                'charm': { 50: '#FCF5F7', 100: '#F8E5EA', 200: '#EFC6CF', 300: '#E6A6B5', 400: '#DD869A', 500: '#D46680', 600: '#C83A5C', 700: '#9E2C47', 800: '#722033', 900: '#461420', 950: '#300E16' },
                'mantis': { 50: '#EEF6EA', 100: '#E2F0DC', 200: '#C9E4C0', 300: '#B1D8A3', 400: '#99CB87', 500: '#81BF6A', 600: '#62A948', 700: '#4B8138', 800: '#355A27', 900: '#1E3316', 950: '#121F0D' },
                'shakespeare': { 50: '#D8EDF3', 100: '#C9E5EE', 200: '#AAD6E5', 300: '#8AC8DB', 400: '#6BB9D2', 500: '#4CAAC8', 600: '#348CA8', 700: '#27687D', 800: '#194552', 900: '#0C2127', 950: '#060F12' },
                'light-grey': '#BFBFBF',
                'mid-grey': '#6E6E6E',
                'dark-grey': '#333333'
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        require("daisyui")
    ],

    daisyui: {
        themes: [
            {
                soupedup: {
                    "primary": "#009ca6",
                    "primary-content": "#fff",
                    "secondary": "#007fa3",
                    "accent": "#89cfc2",
                    "neutral": "#bfbfbf",
                    "base-100": "#ffffff",
                    "info": "#81bf6a",
                    "success": "#4caac8",
                    "warning": "#f7cb50",
                    "error": "#d46680",

                }
            }
        ]
    }
};
