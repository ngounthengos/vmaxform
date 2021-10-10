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
        'vmax': ['Siemreap', 'Roboto'],
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
