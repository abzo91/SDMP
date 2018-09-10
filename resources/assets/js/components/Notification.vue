<template>
<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-warning">{{notifications.length}}</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">You have {{notifications.length}} notifications</li>
        <li>
            <ul class="menu">
                <li v-for="(notification, i) in notifications" :key="i">
                    <a href="#" v-on:click="MarkAsRead(notification)">{{ notification.data.name }} {{ notification.data.meeting }} {{ notification.data.role_id }}</a>
                </li>
                <li v-if="notifications.length == 0">
                There is no new notifications
                </li>
            </ul>
        </li>
    </ul>
</li>
</template>

<script>
    export default {
        props: ['notifications'],
        methods: {
            MarkAsRead: function(notification) {
                var data = {
                    id: notification.id
                };
                axios.post('/notification/read', data).then(response => {
                    window.location.href = "/home/";
                });
            }
        }
    }
</script>
