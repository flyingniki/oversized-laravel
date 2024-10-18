import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/style.min.css",
                "resources/js/index.min.js",
                "resources/js/jquery.min.js",
                "resources/js/slick.min.js",
            ],
            refresh: true,
        }),
    ],
});
