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
                'sky-blue' : 'rgba(7, 24, 50, 0.7)',
                'admin-sidePanel' : 'rgba(16, 22, 35, 0.7)',
            },
            backgroundImage: {
              'enter-screen' : "url('/images/pexels-rafael-cerqueira-4737484.jpg')",
              'admin-screen' : "url(/images/pexels-felix-mittermeier-956981.jpg)",
            },
            height: {
              'admin-sidePanel-Height' : '95%',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
