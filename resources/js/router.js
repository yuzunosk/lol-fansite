import Vue from 'vue'
import Router from 'vue-router'
import Home from './Home';
// import home from './components/ExampleComponent';

Vue.use(Router);


export default new Router({
    mode: "history",
    routes: [
        //ルーティング
        { path: "/home", component: Home },
    ],
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
         } else {
            return { x: 0, y: 0 }
         }
       }
});