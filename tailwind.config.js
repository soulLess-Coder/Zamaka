module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/.js",
        "./node_modules/flowbite/**/*.js"
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
        require("daisyui"),
        require('flowbite/plugin')
    ],

    darkMode: 'class',
    // daisyUI config (optional)
    daisyui: {
        styled: true,
        themes: false,
        base: true,
        utils: true,
        logs: true,
        rtl: false,
        darkTheme: "dark",
  },
}
