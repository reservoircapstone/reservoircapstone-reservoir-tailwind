/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./vendor-dashboard.php",
    "store-profile.php",
    "push-schedule.php",
    "pull-orders.php",
    "subscription.php",
    "pos.php",
    "products-list.php",
    "product-details.php",
    "wallet.php",
    "chat.php",
  ],
  theme: {
    extend: {
      fontFamily: {
        Poppins: ["Poppins", "sans-serif"],
        Righteous: ["Righteous", "cursive"],
      },
    },
  },
  plugins: [],
};
