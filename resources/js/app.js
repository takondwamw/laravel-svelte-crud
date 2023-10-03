import './bootstrap';
// import Layout from '../js/Pages/layout.svelte';

import { createInertiaApp } from '@inertiajs/svelte'

createInertiaApp({
    progress: {
        // The delay after which the progress bar will appear, in milliseconds...
        delay: 250,
        // The color of the progress bar...
        color: 'red', 
        // Whether to include the default NProgress styles...
        includeCSS: true,
        // Whether the NProgress spinner will be shown...
        showSpinner: false,
      },
      //
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.svelte', { eager: true });
    // return { default: page.default, layout: page.layout || Layout }

    return   pages[`./Pages/${name}.svelte`];
  },
  setup({ el, App, props }) {
    new App({ target: el, props })
  },
})