
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
import Chat from './components/Chat.vue';

Vue.use(VueChatScroll)
Vue.component('chat', Chat);


const app = new Vue({
    el: '#app',
    data: {
        message: '',
        chat:{
                message:[]
        },
        typing: '',
    },
    watch:{
        message(){
            Echo.private('chat')
            .whisper('typing', {
                name: this.message
            });
        }
    },
    methods:{
        send(reciver){
            if(this.message.length != 0 )
            {
                this.chat.message.push(this.message);
                // console.log(this.message);
                axios.post('/send/'+reciver, {
                    message: this.message
                  })
                  .then(response => {
                    console.log(response);
                    this.message = ''
                  })
                  .catch(error => {
                    console.log(error);
                  });
            }
        }
    },
    mounted(){
        Echo.private('chat')
        .listen('ChatEvent', (e) => {
        console.log(e);
        this.chat.message.push(e.message);

    })
    .listenForWhisper('typing', (e) => {
        if(e.name != '')
        {
            // console.log('typing..');
            this.typing = 'typing...';
        }
        else
        {
            // console.log('');
            this.typing = '';

        }
    });
    // Echo.join(`chat`)
    // .here((users) => {
    //     console.log(users);
    // })
    // .joining((user) => {
    //     // console.log(user.name);
    // })
    // .leaving((user) => {
    //     // console.log(user.name);
    // });

    }
});