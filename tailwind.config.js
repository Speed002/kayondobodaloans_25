/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/js/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'nav-blue': '#254660',
                'transparent-dark':'rgba(0, 0, 0, 0.3)'
              },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
