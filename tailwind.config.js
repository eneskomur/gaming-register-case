/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        black: "#000",
        color: "#d9d9d9",
        gainsboro: {
          "100": "#e6e6e6",
          "200": "rgba(217, 217, 217, 0.6)",
          "300": "rgba(217, 217, 217, 0.2)",
        },
        gray: {
          "100": "rgba(0, 0, 0, 0.88)",
          "200": "rgba(0, 0, 0, 0.8)",
        },
        color1: "#d3af67",
      },
      spacing: {},
      fontFamily: {
        montserrat: "Montserrat",
        ubuntu: "Ubuntu",
      },
    },
  },
  corePlugins: {
    preflight: false,
  },
}

