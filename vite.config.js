import { defineConfig } from "vite";
import { fileURLToPath } from "url";
import path from "path";
import prismjs from 'vite-plugin-prismjs';

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
    prismjs({
      languages: ["Java", "JavaScript", "CSS", "PHP", "Markup", "SQL", "C", "C#", "C++", "YAML", "JSON"],
      plugins: ["line-numbers", "show-language", "copy-to-clipboard"],
      theme: "default",
      css: true
    })
  ],
  build: {
    outDir: fileURLToPath(new URL("./assets/dist", import.meta.url)),
    emptyOutDir: true,
    lib: {
      entry: path.resolve(__dirname, "src/main.ts"),
      name: "jasmine",
      fileName: "jasmine",
      formats: ["iife"],
    },
  },
});
