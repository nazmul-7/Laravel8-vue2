import Vue from 'vue'
import Router from 'vue-router'

import index from '../pages/index.vue'

Vue.use(Router)

let publicRoute = 1;

export default new Router({
  mode: 'history',
  routes: [

    {
      path: '/',
      name: 'index',
      component: index,
      meta: {
        allowed: publicRoute,
        title: "Home - Laravel Vue Template",
        pageName: "Home"
      }
    },




  ]
})
