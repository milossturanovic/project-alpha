module.exports = {
    content: [
        './*.php',
        './**/*.php',            // Scan all template files
        './assets/js/**/*.js',    // Scan JS files if you use Tailwind there
        './assets/scss/**/*.scss' // This is critical to scan SCSS source files!
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
