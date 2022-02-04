const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {

        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            backgroundColor: {
                'sky-blue': 'rgba(7, 24, 50, 0.7)',
                'admin-sidePanel': 'rgba(16, 22, 35, 0.7)',
                'admin-button' : 'rgba(134, 162, 174, 1)',
                'admin-button-hover' : 'rgba(191, 223, 237, 1)',
            },
            backgroundImage: {
                'enter-screen': "url('/images/pexels-aron-visuals-1743165.jpg')",
                'admin-screen': "url(/images/pexels-rafael-cerqueira-4737484.jpg)",
            },
            height: {
                'admin-sidePanel-Height': '90%',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
