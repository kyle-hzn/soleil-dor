/**
 * @type {import('tailwindcss/tailwind-config').TailwindConfig }
 */
module.exports = {
  content: ['./**/*.{php,html}'],
  theme: {
    container: {
      padding: {
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
      },
    },
    extend: {},
  },
  plugins: [],
};
