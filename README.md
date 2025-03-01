# ms-theme - Custom WordPress Theme

Welcome to **ms-theme**! This is a custom WordPress theme set up to work with **Tailwind CSS 3** and **SCSS**, using **PostCSS** directly (no Gulp required). This README documents the full setup and workflow so you can easily remember and follow it later.

---

## 🚀 Folder Structure

```
ms-theme/
├── assets/
│   ├── scss/                # SCSS Source Files (you edit here)
│   │   ├── style.scss        # Main stylesheet
│   ├── css/                  # Compiled CSS Output (do not edit)
│   │   ├── style.css
├── tailwind.config.js        # Tailwind Config
├── postcss.config.js         # PostCSS Config
├── functions.php             # Enqueues the final CSS
├── header.php, footer.php, etc.
```

---

## 📦 Install Dependencies

Run this inside your theme folder:
```bash
npm install
```

---

## 🏗️ Build Process

### Start Watching (during development)
```bash
npm run watch
```

### Build for Production (optional)
```bash
npm run build
```

---

## 🎨 Editing Styles

Always edit this file:
```
assets/scss/style.scss
```
Example `style.scss`:
```scss
@tailwind base;
@tailwind components;
@tailwind utilities;

body {
    @apply bg-red-500;
}
```

---

## ⚙️ tailwind.config.js (important!)

This is how Tailwind knows where to find your HTML/SCSS/JS:
```javascript
module.exports = {
    content: [
        './*.php',
        './**/*.php',
        './assets/js/**/*.js',
        './assets/scss/**/*.scss'
    ],
    theme: {
        extend: {},
    },
    plugins: [],
}
```

---

## 🛠️ postcss.config.js

```javascript
module.exports = {
    plugins: {
        tailwindcss: {},
        autoprefixer: {},
    },
}
```

---

## 🎁 Enqueue CSS in WordPress

In `functions.php`, make sure you enqueue the final CSS like this:
```php
function ms_theme_enqueue_assets() {
    wp_enqueue_style(
        'ms-theme-style',
        get_template_directory_uri() . '/assets/css/style.css',
        [],
        filemtime(get_template_directory() . '/assets/css/style.css')
    );
}
add_action('wp_enqueue_scripts', 'ms_theme_enqueue_assets');
```

---

## 💡 Key Commands Cheat Sheet

| Task                  | Command |
|----------------------|--------------------|
| Install dependencies  | `npm install` |
| Watch for changes     | `npm run watch` |
| Build for production  | `npm run build` |

---

## ✅ Quick Checklist

- Edit SCSS inside `assets/scss/style.scss`
- Run `npm run watch` while working
- Styles output to `assets/css/style.css`
- Tailwind reads all PHP + SCSS files

---

## 🎉 You Are Ready to Build!

Now you have a clean, modern Tailwind WordPress setup, no Gulp required.

