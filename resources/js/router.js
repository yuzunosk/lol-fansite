import Vue from 'vue'
import Router from 'vue-router'
import Home from './Home';
import Chanpion from './components/chanpionPage/Layout';


Vue.use(Router);


export default new Router({
    mode: "history",
    routes: [
        //ルーティング
        { path: "/home", component: Home },
        { path: "/home/chanpion/:id", component: Chanpion },
        // { path: '/article/create', component: require('./components/Articles/Create.vue') },

    ],
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
         } else {
            return { x: 0, y: 0 }
         }
       }
});