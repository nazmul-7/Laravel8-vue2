import Vue from 'vue'

import Vuex from 'vuex'
Vue.use(Vuex)
const store = new Vuex.Store({
  state: {

    authUser: window.authUser,
  },

  /*All getters*/
  getters: {
    isLoggedIn(state){
      if(_.isEmpty(state.authUser)){
        return false
      }else{
        return true
      }

    },
    authUser(state){
      return state.authUser
    },
  },

  /*all mutations*/
  mutations: {
    authUser(state,user){
      state.authUser=user
    },

  },

 /*all actions*/
  actions: {
    setAuthUser({commit},user){
      commit('authUser',user)
    },
  }
})

export default store
