/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./themes/trc/**/*.{html,js,php}"],
  plugins: [],
  theme: {
		extend: {
			height: {
				'10v': '10vh',
				'20v': '20vh',
				'30v': '30vh',
				'40v': '40vh',
				'50v': '50vh',
				'60v': '60vh',
				'70v': '70vh',
				'80v': '80vh',
				'90v': '90vh',
				'100v': '100vh'
			},
			colors: {
				tr_blue: {
					DEFAULT: '#081D3E',
				},
				tr_yellow: {
					DEFAULT: '#FFC400',
				},
				tr_gray: {
					DEFAULT: '#747161',
				},
			}
		}
	}

}