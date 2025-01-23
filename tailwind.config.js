const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./src/**/*.{html,ts,svg}",
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
                playfair: ['"Playfair Display"', ...defaultTheme.fontFamily.serif],
                arabic: ['"Amiri"', 'serif'],
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
                amber: {
                    500: '#F59E0B',
                    600: '#D97706',
                }
            },
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                'gradient-conic': 'conic-gradient(var(--tw-gradient-stops))',
                'texture': "url('/assets/images/texture.png')",
                'pattern': "url('/assets/patterns/arabic-pattern.svg')",
            },
            boxShadow: {
                'warm': '0 4px 14px 0 rgba(212, 157, 59, 0.39)',
            },
            animation: {
                'bounce-slow': 'bounce 3s infinite',
                'float': 'float 6s ease-in-out infinite',
            },
            keyframes: {
                float: {
                    '0%, 100%': { transform: 'translateY(0)' },
                    '50%': { transform: 'translateY(-20px)' },
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/aspect-ratio'),
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
    ],
} 