module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {

    extend: {
      fontFamily: {
        'vmax': ["Noto Serif Khmer", 'Noto Sans Display'],
      },
      listStyleType: {
        decimal: 'decimal',
        square: 'square',
        roman: 'upper-roman',
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
