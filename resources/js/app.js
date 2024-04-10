import './bootstrap';
import '../css/app.css';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import PrimeVue from "primevue/config";
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import InputText from "primevue/inputtext";
import FloatLabel from "primevue/floatlabel";
import Wind from '../css/prime-vue-presets/wind'
import Toast from 'primevue/toast';
import ToastService from "primevue/toastservice";
import Button from "primevue/button";

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .use(PrimeVue, {
                unstyled: true,
                pt: {
                    InputText:{
                        root:{
                            class: 'border-2 border-zinc-400/80 p-2 rounded !appearance-none bg-transparent  focus:!outline-none focus:ring-2 focus:ring-green-400 z-10 w-full'
                        }
                    },
                    Button: {

                    root: { class: 'bg-teal-500 hover:bg-teal-700 cursor-pointer text-white p-3 border-round border-none flex gap-2' },
                    label: { class: 'text-white font-bold text-xl' },
                    icon: { class: 'text-white text-2xl' }

                    }
                }

            })
            .use(ToastService)
            .component('FloatLabel', FloatLabel)
            .component('InputText', InputText)
            .component('Button', Button)
            .component('Toast', Toast)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
