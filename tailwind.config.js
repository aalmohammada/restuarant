const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
                playfair: ['"Playfair Display"', ...defaultTheme.fontFamily.serif],
            },
            colors: {
                gold: {
                    50: '#FDFAF3',
                    100: '#FBF5E6',
                    200: '#F6E7C0',
                    300: '#F1D89A',
                    400: '#E8BB4E',
                    500: '#DE9D02',
                    600: '#C88D02',
                    700: '#A67701',
                    800: '#855F01',
                    900: '#6D4E01',
                },
                neutral: {
                    850: '#1f2937',
                },
            },
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
            },
        },
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),
    ],
} 