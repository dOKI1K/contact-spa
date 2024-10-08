/** @type {import('tailwindcss').Config} */

const siteColors = {
    'primary': '#0d6efd',
    'secondary': '#6c757d',
    'success': '#198754',
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

