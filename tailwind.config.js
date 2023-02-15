const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans]
            }
        },
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '.5rem',
                md: '.5rem',
                lg: '1.5rem',
                xl: '5.5rem'
            }
        }
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')]
}
