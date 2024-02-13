/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.{js,ts,jsx,tsx}",
    'node_modules/flowbite-react/**/*.{js,jsx,ts,tsx}',
  ],
  theme: {
    
    extend: {
      fontFamily: {
        Poppins: ['Poppins','sans-serif'],
        Cookie: ['Cookie', 'cursive'],
        Jost: ['Jost', 'sans-serif'],
        Alegreya: ['Alegreya Sans', 'sans-serif'],
        BeVietnamPro: ['Be Vietnam Pro', 'sans-serif'],
        Chelse: ['Chelsea Market', 'sans-serif'],
      },
      colors: {
        'febbcc': '#FEBBCC', // Menambahkan warna FF90BC dengan nilai hex
      },


      display: ['group-focus']
    },
  },
  plugins: [require('flowbite/plugin')],
}

