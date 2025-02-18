/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/js/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                'nav-blue': '#254660',
              },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}
