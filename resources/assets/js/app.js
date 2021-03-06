
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('notification', require('./components/Notification.vue'));
/*
const app = new Vue({
    el: '#app',
    created() {
        Echo.channel('channelDemoEvent')
        .listen('eventTrigger', (e) => {
            alert('Meeting in 5 minutes');
        });
    }
});
*/
const app1 = new Vue({
    el: '#app1',
    data: {
        notifications: ''
    },
    created() {
        axios.post('/notification/get').then(response => {
            this.notifications = response.data;
        });
        var userId = $('meta[name="userId"]').attr('content');
        Echo.private('App.User.' + userId).notification((notification) => {
            this.notifications.push(notification);
        });
        Echo.private('App.User.' + userId).listen('eventTrigger', (e) => {
            alert('Meeting in 5 minutes');
        });
    }
});
