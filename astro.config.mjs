import { defineConfig } from 'astro/config';

export default defineConfig({
  site: 'https://steepstep.com',
  prefetch: false,
  vite: {
    resolve: {
      tsconfigPaths: false,
    },
  },
});
