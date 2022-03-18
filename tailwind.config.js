const plugin = require('tailwindcss/plugin')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
        'poppins' : ['Poppins']
    },
    screen: {
        'tablet': '640px',
        'laptop': '1024px',
        'desktop': '1280px',
    },
    extend: {},
  },
  plugins: [
      plugin(function({ addUtilities }) {
        const utilities = {
            ".bg-hero": {
                "background-image": "url(/images/home.png)",
                "background-size": "cover",
                "background-position": "bottom",
                "background-repeat": "no-repeat"
            },
            ".bg-slider1": {
                "background-image": "url(/images/gallery/1.png)",
                "background-size": "cover",
                "background-position": "center",
                "background-repeat": "no-repeat",
            },
            ".bg-slider2": {
                "background-image": "url(/images/gallery/2.png)",
                "background-size": "cover",
                "background-position": "center",
                "background-repeat": "no-repeat",
            },
            ".bg-slider3": {
                "background-image": "url(/images/gallery/3.png)",
                "background-size": "cover",
                "background-position": "center",
                "background-repeat": "no-repeat",
            },
            ".is-active": {
                "opacity": "1",
            }
        };

        addUtilities(utilities);
      })
  ],
}
