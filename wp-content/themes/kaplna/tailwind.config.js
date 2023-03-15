/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        'half-white-transparrent': 'rgba(255, 255, 255, 0.5)',
        'half-black-transparent': 'rgba(0, 0, 0, 0.5)',
      },
      fontFamily: {
        'eczar': ['Eczar', 'serif'],
      }
    },
  },
  plugins: [],
}
