/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./**/*.php",
    "./*.php",
  ],
  theme: {
    extend: {
      colors: {
        'base': '#F6F6F6',
        'base-color': '#F6F6F6',
        'base-text': '#080D1B',
        'base-cont': '#080D1B',
        'base-color-dark': '#F7EBE7',
        'main': '#fbe5e7',
        'main-cont': '#FFF',
        'accent': '#A69463',
        'accent-cont': '#FFF',
      },
    },
  },
  plugins: [],
}
