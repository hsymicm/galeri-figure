/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./application/views/**/*.{html,php}"],
  theme: {
    fontFamily: {
      display: ["Bebas Neue", "sans-serif"],
      sans: ["Roboto", "sans-serif"],
    },
    extend: {
      colors: {
        primary: {
          light: "#86C2FF",
          DEFAULT: "#3296F9",
          dark: "#1F2A33"
        },
        background: {
          DEFAULT: "#EDEFF1",
          dark: "#DBE2E9"
        },
        secondary: "#F73939",
      },
    },
  },
  plugins: [],
}

