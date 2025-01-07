import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    portfolioItems: [],
    categories: [],
    loading: false,
    error: null
  },
  mutations: {
    SET_PORTFOLIO_ITEMS(state, items) {
      state.portfolioItems = items
    },
    SET_CATEGORIES(state, categories) {
      state.categories = categories
    },
    SET_LOADING(state, loading) {
      state.loading = loading
    },
    SET_ERROR(state, error) {
      state.error = error
    }
  },
  actions: {
    async fetchPortfolioItems({ commit }) {
      try {
        commit('SET_LOADING', true)
        const response = await axios.get('/api/portfolio')
        commit('SET_PORTFOLIO_ITEMS', response.data)
      } catch (error) {
        commit('SET_ERROR', error.message)
      } finally {
        commit('SET_LOADING', false)
      }
    }
  },
  getters: {
    getPortfolioByCategory: (state) => (category) => {
      return state.portfolioItems.filter(item => item.category === category)
    }
  }
}) 