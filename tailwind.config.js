/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        screens: {
            xs: "425px",
            sm: "575.98px",
            md: "767.98px",
            lg: "991.98px",
            xl: "1199.98px",
            xxl: "1440px", 
        },
    },
    plugins: [],
};
