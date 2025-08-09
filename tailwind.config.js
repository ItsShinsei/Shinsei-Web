export default {
  darkMode: 'class', // enables 'dark:' styles via a class
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['"Segoe UI"', 'Roboto', 'sans-serif'],
      },
    },
  },
  plugins: [],
}


// tailwind.config.js
module.exports = {
  theme: {
    extend: {
      keyframes: {
        customBounce: {
          '0%, 100%': { transform: 'translateY(0)' },
          '50%': { transform: 'translateY(-25%)' },
        }
      },
      animation: {
        customBounce: 'customBounce 1s infinite',
      }
    },
  },
  variants: {},
  plugins: [],
}