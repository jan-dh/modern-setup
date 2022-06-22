import path from 'path';
import ViteRestart from 'vite-plugin-restart';

// https://vitejs.dev/config/
/**
 * @type {import('vite').UserConfig}
 */
export default ({ command }) => {
    return {
        base: command === 'serve' ? '' : '/dist/',
        build: {
            commonjsOptions: {
                transformMixedEsModules: true,
            },
            manifest: true,
            outDir: path.resolve(__dirname, 'web/dist/'),
            // assetsDir: './',
            rollupOptions: {
                input: {
                    app: path.resolve(__dirname, 'resources/js/app.js'),
                },
            },
        },
        plugins: [
            ViteRestart({
                reload: [
                    path.resolve(__dirname, 'templates/**/*'),
                ],
            }),
        ],
        publicDir: path.resolve(__dirname, 'resources/public'),
        resolve: {
            alias: {
                '@': path.resolve(__dirname, 'resources'),
                '@css': path.resolve(__dirname, 'resources/css'),
                '@js': path.resolve(__dirname, 'resources/js'),
            },
        },
        server: {
            host: '0.0.0.0',
            port: 3000,
            strictPort: true,
        },
    };
};
