import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);
mix.sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/custom.scss', 'public/css');
Alpine.start();
