/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./pages/**/*.php",
    "./templates/**/*.php",
    "./includes/**/*.php"
  ],
  theme: {
    extend: {
      colors: {
        'wine': '#722F37',
        'light-wine': '#ffe4e6'
      },
    },
  },
  plugins: [],
}