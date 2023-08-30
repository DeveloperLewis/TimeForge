/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/views/**/*.blade.php",
  ],
  theme: {
      extend: {
          colors: {
              'custom-blue-light': '#181E24',
              'custom-blue-medium': '#11161A',
              'custom-blue-dark': '#0A0D12',
          }
          },
      fontFamily: {
          lato: 'Lato'
      },
      plugins: [],
  }
}

