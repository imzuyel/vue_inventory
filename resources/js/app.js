require('./bootstrap');

window.Vue = require('vue').default;
import VueRouter from "vue-router";
Vue.use(VueRouter);

import { routes } from "./routes";
//Import User Class
import User from './Helpers/User';
window.User = User


//Sweert Alert
import Swal from "sweetalert2";
window.Swal = Swal;
const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: toast => {
        toast.addEventListener("mouseenter", Swal.stopTimer);
        toast.addEventListener("mouseleave", Swal.resumeTimer);
    }
});
window.Toast = Toast;
//Sweet aler end

//Relode
window.Relode = new Vue();

//Noty
import Notification from "./Helpers/Notification";
window.Notification = Notification;
//end Noty

const router = new VueRouter({
    mode: 'history',
    routes
});


const app = new Vue({
    el: "#app",
    router
});