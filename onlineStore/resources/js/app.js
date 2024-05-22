import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

// let locale = localStorage('locale');
// if(!locale){
//     localStorage.setItem('locale', 'en');
//     locale= localStorage.getItem('locale');
// }
// window.locale = locale;

// import { createI18n } from 'vue-i18n/dist/vue-i18n.cjs';
// import messages from './messages';

// const i18n = createI18n({
//     locale:locale,
//     fallbackLocale: 'en',
//     globalInjection: true,
//     messages
// })

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            //.use(i18n)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
