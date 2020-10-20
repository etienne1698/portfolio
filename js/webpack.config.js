const webpack = require("webpack");
const path = require("path");

let config = {
    entry: ['whatwg-fetch', './src/index.js'],
    output: {
        path: path.resolve(__dirname, "../"),
        filename: "./bundle.js"
    }
};

module.exports = config;