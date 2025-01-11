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
                primary: {
                    50: '#FCF8F1',
                    100: '#F9F1E3',
                    200: '#F3E3C7',
                    300: '#ECD5AB',
                    400: '#E0B973',
                    500: '#D49D3B',
                    600: '#BF8D35',
                    700: '#9F762C',
                    800: '#7F5E23',
                    900: '#684D1C',
                },
                secondary: {
                    50: '#F5F7FA',
                    100: '#EBEEF5',
                    200: '#D7DEEB',
                    300: '#C3CDE0',
                    400: '#9BACCC',
                    500: '#738BB8',
                    600: '#687DA6',
                    700: '#56688B',
                    800: '#45536F',
                    900: '#39445A',
                },
                neutral: {
                    850: '#1f2937',
                },
            },
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                'gradient-conic': 'conic-gradient(var(--tw-gradient-stops))',
                'texture': "url('/images/texture.png')",
            },
            boxShadow: {
                'warm': '0 4px 14px 0 rgba(212, 157, 59, 0.39)',
            },
            animation: {
                'fade-in': 'fadeIn 0.6s ease-out forwards',
                'slide-up': 'slideUp 0.6s ease-out forwards',
                'scale': 'scale 0.3s ease-in-out',
            },
        },
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
} 