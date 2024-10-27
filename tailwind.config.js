/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      height: {
        'main-screen': 'calc(100vh - 64px)', // Clase personalizada
      },
      colors: {
        'azul-unbc': '#2CD5D9',
        'verde-unbc': '#00FC92',
        'verde-paris': '#50C878',
        'gris-perla': '#cdcecf',
        'gris-antracita': '#293133',
        'gris-marengo': '#5b5d74',
        'plata': '#e3e4e5',
      },
    },
  },
  plugins: [],
}

