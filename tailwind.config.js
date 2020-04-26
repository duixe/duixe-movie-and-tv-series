module.exports = {
  theme: {
    extend: {
      width: {
        '96': '21rem'
      }
    },
    backgroundColor: theme => ({
     ...theme('colors'),
     'primary': '#032541',
     'primary-light': '#1a3b54',
     'danger': '#e3342f',
    }),
    maxHeight: {
     '0': '0',
     '1/4': '25%',
     '1/2': '50%',
     '3/4': '75%',
     'full': '100%',
}
  },
  variants: {},
  plugins: [],
}
