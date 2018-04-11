require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('youtube-component', require('./components/YoutubeComponent'));
Vue.component('twitter-component', require('./components/TwitterComponent'));
Vue.component('instagram-component', require('./components/InstagramComponent'));

const app = new Vue({
    el: '#app'
});
