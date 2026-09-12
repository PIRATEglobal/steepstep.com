import { defineConfig } from 'astro/config';

export default defineConfig({
  prefetch: false,
  vite: {
    resolve: {
      tsconfigPaths: false,
    },
  },
});
