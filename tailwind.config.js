module.exports = {
  theme: {
    extend: {
      width: {
        '70': '30rem',
        '96': '55rem',
        '90': '21rem'
      },
      height: {
        '70': '45rem',
      },
      spacing: {
        '60': '7rem',
        '61': '9rem',
        '62': '15rem'
      }
    },
    spinner: (theme) => ({
      default: {
        color: '#dae1e7', // color you want to make the spinner
        size: '1em', // size of the spinner (used for both width and height)
        border: '2px', // border-width of the spinner (shouldn't be bigger than half the spinner's size)
        speed: '500ms', // the speed at which the spinner should rotate
      },
    }),
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
  plugins: [
    require('tailwindcss-spinner')()
  ],
}
