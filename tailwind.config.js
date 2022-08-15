/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./vendor-dashboard.php",
    "vendor-profile.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        Poppins: ["Poppins, sans-serif"],
      },
    },
  },
  plugins: [],
};
