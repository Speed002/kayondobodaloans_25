/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/js/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'nav-blue': '#254660',
                'transparent-dark':'rgba(0, 0, 0, 0.3)',
                'major-background':'linear-gradient(to top, #09203f 0%, #1f3d54 100%) !important'
              },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
