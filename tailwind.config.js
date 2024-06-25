/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/*.php", "./app/Views/**/*.php", "./app/Views/**/**/*.php", "./app/Views/**/**/**/*.php"],

  theme: {
    extend: {
      colors: {
        maggotic: "#1E90FF",
      },
    },
  },
  plugins: [require("daisyui")],
};
