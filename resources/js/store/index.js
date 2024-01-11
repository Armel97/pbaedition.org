import { createStore } from 'vuex'
import createPersistedState from 'vuex-persistedstate'

export default createStore ({
    plugins: [
        createPersistedState(),
      ],

    state : {
        authenticated: false,
        user: 'null',
        token: null,
        role: null,
        entity: null,
    },
    getters : {
        getUser (state){
            return state.user
        }
    },
    mutations : {
        setUser(state, user) {
            state.user = JSON.stringify(user)
            state.authenticated = true
          },
          async initializeAuth(state) {
            // Initialiser l'authentification si l'utilisateur était bien connecté
            try {
              const response = await axiosClient.get('/user')
              state.authenticated = true
              state.user = JSON.stringify(response.data)
            } catch (error) {
              state.token = null
              state.currentRoute = null
              state.authenticated = false
              localStorage.removeItem('vuex')
              state.user = {}
              localStorage.clear()
            //   provideToast({
            //     hideProgressBar: true,
            //     closeOnClick: false,
            //     closeButton: false,
            //     icon: false,
            //     timeout: 3000,
            //     transition: 'Vue-Toastification__fade',
            //   })
            }
          },
          initializeRole(state, value) {
            state.role = value
          },
          initializeDepartment(state, value) {
            state.entity = value
          },
    }

  })


 