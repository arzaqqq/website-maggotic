/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/*.php",
    "./app/Views/**/*.php",
    "./app/Views/**/**/*.php",
    "./app/Views/**/**/**/*.php",
  ],

  theme: {
    extend: {
      colors: {
        maggotic: "#1E90FF",
        hitam: "#2C2C2C",
      },
      screens: {
        xs: "480px",
        xxs: "360px",
        xxxs: "320px",
      },
    },
  },
  plugins: [require("daisyui")],
};
