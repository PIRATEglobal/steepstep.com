import { defineConfig } from 'astro/config';

export default defineConfig({
  site: 'https://steepstep.com',
  prefetch: false,
  vite: {
    resolve: {
      tsconfigPaths: false,
    },
    server: {
      proxy: {
        '/api': `http://127.0.0.1:${process.env.STEEPSTEP_PHP_PORT || '8787'}`,
      },
    },
  },
});
