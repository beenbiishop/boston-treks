const theme = require( './theme.json' );
const tailpress = require( "@jeffreyvr/tailwindcss-tailpress" );

/** @type {import('tailwindcss').Config} */
module.exports = {
	content: [
		'./*.php', './**/*.php', './resources/css/*.css', './resources/js/*.js', './safelist.txt'
	], daisyui: {
		themes: ["winter", "night"], darkTheme: "night",
	}, theme: {
		container: {
			padding: {
				DEFAULT: '1rem', sm: '2rem', lg: '0rem'
			},
		}, extend: {
			colors: tailpress.colorMapper( tailpress.theme( 'settings.color.palette', theme ) ),
			fontSize: tailpress.fontSizeMapper( tailpress.theme( 'settings.typography.fontSizes', theme ) )
		}, screens: {
			'xs': '480px',
			'sm': '600px',
			'md': '782px',
			'lg': tailpress.theme( 'settings.layout.contentSize', theme ),
			'xl': tailpress.theme( 'settings.layout.wideSize', theme ),
			'2xl': '1440px'
		}, fontFamily: {
			'body': [
				'acumin-pro',
				'ui-sans-serif',
				'system-ui',
				'-apple-system',
				'BlinkMacSystemFont',
				'"Segoe UI"',
				'Roboto',
				'"Helvetica Neue"',
				'Arial',
				'"Noto Sans"',
				'sans-serif',
				'"Apple Color Emoji"',
				'"Segoe UI Emoji"',
				'"Segoe UI Symbol"',
				'"Noto Color Emoji"'
			], 'display': [
				'neue-haas-grotesk-display',
				'ui-sans-serif',
				'system-ui',
				'-apple-system',
				'BlinkMacSystemFont',
				'"Segoe UI"',
				'Roboto',
				'"Helvetica Neue"',
				'Arial',
				'"Noto Sans"',
				'sans-serif',
				'"Apple Color Emoji"',
				'"Segoe UI Emoji"',
				'"Segoe UI Symbol"',
				'"Noto Color Emoji"'
			]
		}
	}, plugins: [
		require( '@tailwindcss/forms' ), require( "@tailwindcss/typography" ), require( "daisyui" ), tailpress.tailwind
	]
};
