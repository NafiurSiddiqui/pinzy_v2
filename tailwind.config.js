import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.{js,vue,jsx,ts,tsx}',

    ], theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            height: {
                '68vh': '68vh',
                '76vh': '76vh',
                '80vh': '80vh',
                '90vh': '90vh',
            },
            backgroundColor: {
                primary: '#f7f6f1',
            },
            // fontFamily: {
            //     caveat: ['Caveat', 'cursive'],
            // },
            // screens: {
            //     'android-md': '400px',
            //     'android-md/2': '450px',
            //     tablet: '640px',
            //     'tablet-md': '768px',
            //     laptop: '1024px',
            //     desktop: '1280px',
            //     'desktop-md': '1536px',
            // },
            // animation: {
            //     'fade-up': 'fade-up 1s ease-in-out',
            //     'fade-down': 'fade-down 1s ease-in-out',
            // },
            // keyframes: {
            //     'fade-up': {
            //         '0%': {
            //             bottom: '-100%',
            //         },
            //         '100%': {
            //             bottom: '0',
            //         },
            //     },
            //     'fade-down': {
            //         '0%': {
            //             bottom: '0',
            //         },
            //         '100%': {
            //             bottom: '-100%',
            //         },
            //     },
            // },
            colors: {
                "primary-50": "rgb(var(--primary-50))",
                "primary-100": "rgb(var(--primary-100))",
                "primary-200": "rgb(var(--primary-200))",
                "primary-300": "rgb(var(--primary-300))",
                "primary-400": "rgb(var(--primary-400))",
                "primary-500": "rgb(var(--primary-500))",
                "primary-600": "rgb(var(--primary-600))",
                "primary-700": "rgb(var(--primary-700))",
                "primary-800": "rgb(var(--primary-800))",
                "primary-900": "rgb(var(--primary-900))",
                "primary-950": "rgb(var(--primary-950))",

                "surface-0": "rgb(var(--surface-0))",
                "surface-50": "rgb(var(--surface-50))",
                "surface-100": "rgb(var(--surface-100))",
                "surface-200": "rgb(var(--surface-200))",
                "surface-300": "rgb(var(--surface-300))",
                "surface-400": "rgb(var(--surface-400))",
                "surface-500": "rgb(var(--surface-500))",
                "surface-600": "rgb(var(--surface-600))",
                "surface-700": "rgb(var(--surface-700))",
                "surface-800": "rgb(var(--surface-800))",
                "surface-900": "rgb(var(--surface-900))",
                "surface-950": "rgb(var(--surface-950))",
            },
        },


    }, plugins: ["prettier-plugin-tailwindcss"]
    };
