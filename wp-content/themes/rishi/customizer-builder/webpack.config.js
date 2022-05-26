const path = require("path");
const defaultConfig = require("@wordpress/scripts/config/webpack.config");

const MiniCssExtractPlugin = require("mini-css-extract-plugin");

const __headerFooterBuilderDir = path.resolve(__dirname, "src");

_cbentries = {
	"events": `${__headerFooterBuilderDir}/js/events.js`,
	"main": [
		`${__headerFooterBuilderDir}/scss/index.scss`,
		`${__headerFooterBuilderDir}/js/main.js`,
	],
	"sync": `${__headerFooterBuilderDir}/js/customizer/sync.js`,
	"customizerControls": [
		`${__headerFooterBuilderDir}/scss/theme.scss`,
		`${__headerFooterBuilderDir}/js/customizer/controls.js`,
	],
	"options": `${__headerFooterBuilderDir}/js/options.js`,
	"editor": `${__headerFooterBuilderDir}/js/editor.js`
}

module.exports = {
	...defaultConfig,
	entry: { ..._cbentries },
	output: {
		...defaultConfig.output,
		path: path.resolve(__dirname, "dist"),
		filename: pathData => '[name]/[name].js',
		library: ["rishiExports", "[name]"],
	},
	externals: {
		// Stubs out `require('form-data')` so it returns `global.FormData`
		'rishi-customizer-options': "window.rishiExports.customizerControls",
		'rishi-options': "window.rishiExports.options",
		'rt-events': "window.rtEvents",
		'rishi-frontend': "window.rishiExports.main",
		'rishi-customizer-sync': "window.rishiExports.sync",
	},
	plugins: defaultConfig.plugins.map(plugin => {
		return plugin instanceof MiniCssExtractPlugin ? new MiniCssExtractPlugin({
			// Options similar to the same options in webpackOptions.output
			// all options are optional
			filename: (pathData) => '[name]/[name].css',
			chunkFilename: "[id].css",
			ignoreOrder: false, // Enable to remove warnings about conflicting order
		}) : plugin
	}),
	resolve: {
		alias: {
			CustomizerBuilder: path.resolve(__dirname, 'src')
		}
	}
}
