module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            width: {
                '96': '24rem',
            }
        },
        spinner: (theme) => ({
            default: {
                color: '#dae1e7',
                size: '1em',
                border: '2px',
                speed: '500ms',
            },
        }),
    },
    variants: {},
    plugins: [
        require('tailwindcss-spinner')(),

    ],
}
