/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
      "./resources/**/**/*.blade.php",
    "./resources/**/*.js",
      './public/index.html',

  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
