var ExtractText = require('extract-text-webpack-plugin');
var BrowserSyncPlugin = require('browser-sync-webpack-plugin');

var config = {
  entry: ['./src/js/main.js', './src/scss/main.scss'],
  output: {
    filename: 'assets/js/[name].js'
  },
  module: {

    rules: [
      {
        test: /\.(css|sass|scss)$/,
        use: ExtractText.extract({
          use: ['css-loader', 'sass-loader'],
        })
      },
      {
        test: /\.js$/,
        exclude: /(node_modules|bower_components)/,
        loader: 'babel-loader',
        query: {
          presets: ['env']
        }
      },
    ]
  },
  plugins: [
    new ExtractText({
      filename: 'assets/css/[name].css',
      allChunks: true,
    }),
    // @NOTE: make sure this proxy matches the folder name of your wordpress installation
    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3000,
      proxy: 'http://localhost/solana-empowered',
      files: ['**/*.php']
    })
  ]
};

module.exports = config;
