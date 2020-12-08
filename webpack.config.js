const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
    entry: {
        shared: [ "./ts/shared.ts", "./scss/shared.scss" ],
        backend: [ "./ts/backend.ts", "./scss/backend.scss" ],
        frontend: [ "./ts/frontend.ts", "./scss/frontend.scss" ],
    },
    output: {
        path: __dirname,
        filename: "./js/[name].js"
    },
    module: {
        rules: [
            {
                test: /\.ts$/i,
                use: 'ts-loader',
                exclude: [ /node_modules/, /vendor/ ]
            },
            {
                test: /\.s[ac]ss$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    "css-loader",
                    "sass-loader"
                ]
            }
        ]
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "./css/[name].css",
        })
    ],
}