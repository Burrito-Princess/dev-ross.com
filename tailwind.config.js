/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./index.html", 
    "./ross/about.php",
    "./js/index.php",
    "./js/snake/index.html"
  ],
  theme: {
    fontFamily:{

    },
    colors: {
      king_pink: '#e8b7d5',
      king_white: '#f2f2f2',
      black: '#289347',
      dark_pink: '#685369',
      king_blue: '#6E96CE',
      hover_king_blue: '#4E76AE',
      hover_king_pink: '#ceA3c1',
    },
    screens:{
        'xs': '560px',
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1536px',
        'mb': "1330px",
    }
  },
  extend:{
    width:{
      main: '40rem',
      
    },
    height:{
      100: '100rem',
    }
  },
  plugins: [],
}

