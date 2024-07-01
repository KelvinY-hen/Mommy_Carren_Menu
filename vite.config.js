import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});

// export default defineConfig({
//     server: {
//         host: '0.0.0.0',
//     },
// 	plugins: [
// 		// inertia(),
// 		// vue(),
// 		laravel({
// 			postcss: [
// 				tailwindcss(),
// 				autoprefixer(),
// 			],
// 		}),
// 	],
// })