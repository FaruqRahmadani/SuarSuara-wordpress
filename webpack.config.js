// ini file untuk konfigurasi webpack
module.exports = {
	mode: 'production',
	entry : {
		app : "./assets/js/main.js"
	},
	output : {
		path : __dirname + "/js",
		filename : "[name].js"
	},
	module : {
		rules : [
			{
				test: /\.m?js$/,
	      exclude: /(node_modules|bower_components)/,
	      use: {
	        loader: 'babel-loader',
	        options: {
	          presets: ['@babel/preset-env']
	        }
	      }
			}
		]
	}
}
