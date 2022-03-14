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
            }
        };

        addUtilities(utilities);
      })
  ],
}
