/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    extend: {
      colors: {
        'primary': '#85A392',
        'secondary': '#FDD998',
        'secondary-hover': '#F5B971',
        'text-gray': '#333333',
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
