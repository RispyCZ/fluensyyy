import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        fluensy: {
          orange: '#FF5733', // Primary Mexican-inspired orange
          yellow: '#FFC300', // Bright sunburst yellow
          white: '#FFFFFF', // Speech bubble white
        }
      }
    },
  },
  plugins: [],
};
