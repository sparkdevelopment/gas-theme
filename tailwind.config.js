const theme = require('./theme.json');
const tailpress = require("@jeffreyvr/tailwindcss-tailpress");

module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './resources/css/*.css',
        './resources/js/*.js',
        './safelist.txt'
    ],
    theme: {
        container: {
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '0rem'
            },
        },
        extend: {
            colors: tailpress.colorMapper(tailpress.theme('settings.color.palette', theme)),
            fontSize: tailpress.fontSizeMapper(tailpress.theme('settings.typography.fontSizes', theme)),
            backgroundImage: {
                'lighting': "url('/wp-content/themes/gas-theme/resources/img/lighting.jpg')",
                'camera_digital': "url('/wp-content/themes/gas-theme/resources/img/camera_digital.jpg')",
                'production': "url('/wp-content/themes/gas-theme/resources/img/production.jpg')"
            }
        },
        screens: {
            'xs': '480px',
            'sm': '600px',
            'md': '782px',
            'lg': tailpress.theme('settings.layout.contentSize', theme),
            'xl': tailpress.theme('settings.layout.wideSize', theme),
            '2xl': '1440px'
        },
        fontFamily: {
            'theme-heading': ['Milligram', 'sans-serif'],
            'sans': ['Milligram', 'sans-serif'],
        }
    },
    plugins: [
        tailpress.tailwind
    ],
    safelist: [
        'align-middle',
        'bg-camera_digital',
        'bg-lighting',
        'bg-production',
        'border-b-2',
        'border-white',
        'px-8',
        'py-4',
        'rounded-full',
        'table-cell'
    ]
};
