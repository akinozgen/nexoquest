import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// when page loaded
window.addEventListener('load', function () {

    const editorWindows = Array.from(document.querySelectorAll('.md-editor'));
    const isDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    window.editors = [];

    const disqus_config = function () {
        this.page.url = window.location.href;
        this.page.identifier = window.location.pathname;
    };

    (function () { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://nexoquest.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();

});
