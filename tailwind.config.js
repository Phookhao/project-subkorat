/** @type {import('tailwindcss').Config} */

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {    screens:{
      'sm': '480px',
      'md': '768px',
      'lg': '976px',
      'xl': '1440px',
    },
    fontFamily: {
      thai: ["Noto Serif Thai", 'serif'],
      english: ["Mitr", 'sans-serif']
    },
    colors:{
      'deepblue':'#011F37',
      'littleblue':' #0E6497',
    }
  },
  },
  plugins: [],

}

