/** @type {import('tailwindcss').Config} */

const siteColors = {
    'primary': '#edbf6d',
    'secondary': '#00032e',
    'tertiary': '#6dc5ed',
    'success': '#198754',
    'light': '#f8f9fa',
    'danger': '#dc3545',
    'warning': '#ffc107',
};

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                'rubik': ['Rubik', 'sans-serif'],
                'poppins': ['Poppins', 'sans-serif'],
                'mulish': ['Mulish', 'sans-serif'],
                'jost': ['Jost', 'sans-serif'],
            },
            backgroundColor: siteColors,
            colors: siteColors,
            textColor: siteColors,
        },
    },
    plugins: [],
}

