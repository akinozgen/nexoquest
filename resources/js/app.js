import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// when page loaded
window.addEventListener('load', function () {

    const editorWindows = Array.from(document.querySelectorAll('.md-editor'));
    const isDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    window.editors = [];


});
