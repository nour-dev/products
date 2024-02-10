import { fileURLToPath, URL } from 'node:url'

import { defineConfig } from 'vite'
import vue from '@vitejs/plugin-vue'

// https://vitejs.dev/config/


export default defineConfig({
  plugins: [
    vue(),
  ],
  build: {
    sourcemap: true,
  },
  server: {
    proxy: {
      '/api': 'http://127.0.0.1:8000'
    }
  },
  resolve: {
    alias: {
      '@': fileURLToPath(new URL('./src', import.meta.url))
    }
  }
})


