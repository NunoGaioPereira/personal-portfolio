/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        mainblue: '#54b4f8',
      }
    }
    /*extend: {
    	transitionProperty: {
            'width': 'width'
        },
    },*/
  },
  variants: {
    extend: {
    	translate: ['group-hover']
    },
  },
  plugins: [],
}

