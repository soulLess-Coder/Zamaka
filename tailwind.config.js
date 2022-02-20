module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/.js",
    ],
    theme: {
        extend: {
            fontFamily: {
                'sen': ['Sen-Bold', 'Sen-ExtraBold', 'Sen-Regular'],
                'sans': ['Roboto', 'Helvetica', 'Arial', 'sans-serif']
            }
        },
    },
    plugins: [
        require("daisyui")],
}
