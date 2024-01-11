

import axiosClient from "../helpers/axios"
import { ref } from 'vue'

export default function useBooks() {
  const structure = ref()
  const loader = ref(false)
  const success = ref(false)
  const showEmpty = ref(false)
  const errors = ref([])
  const categories = ref([])
  const books = ref([])
  const evenements = ref([])
  const trainings = ref([])
  const distributeurs = ref([])
  const teams = ref([])

  const getAllCategories = async () => {
    try {
      const response = await axiosClient.get('/book-categories')
      if (response.data.success === true) {
        categories.value = response.data.data
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getAllBooks = async (page=1) => {
    try {
      const response = await axiosClient.get(`/get-books?page=${page}`)
      if (response.data.success === true) {
        books.value = response.data.data
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getBooksAParaitre = async (page=1) => {
    try {
      showEmpty.value = false
      const response = await axiosClient.get(`/get-books-a-paraitre?page=${page}`)
      if (response.data.success === true) {
        books.value = response.data.data
        if (response.data.data.data.length ===0) {
          showEmpty.value = true
        }
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getLivresHipp = async (page=1) => {
    try {
      showEmpty.value = false
      const response = await axiosClient.get(`/get-books-livres-hippo?page=${page}`)
      if (response.data.success === true) {
        books.value = response.data.data
        if (response.data.data.data.length ===0) {
          showEmpty.value = true
        }
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getBooksNouveautes = async (page=1) => {
    try {
      showEmpty.value = false
      const response = await axiosClient.get(`/get-books-nouveautes?page=${page}`)
      if (response.data.success === true) {
        books.value = response.data.data
        if (response.data.data.data.length ===0) {
          showEmpty.value = true

        }
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getPbaEvents = async (page=1) => {
    try {
      showEmpty.value = false
      const response = await axiosClient.get(`/get-pba-events?page=${page}`)
      if (response.data.success === true) {
        evenements.value = response.data.data
        if (response.data.data.data.length ===0) {
          showEmpty.value = true

        }
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getPbaTrainings = async (page=1) => {
    try {
      showEmpty.value = false
      const response = await axiosClient.get(`/get-pba-trainings?page=${page}`)
      if (response.data.success === true) {
        trainings.value = response.data.data
        if (response.data.data.data.length ===0) {
          showEmpty.value = true

        }
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getDistributeurs = async (page=1) => {
    try {
      const response = await axiosClient.get(`/get-distributeurs?page=${page}`)
      if (response.data.success === true) {
        distributeurs.value = response.data.data
        
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getPbaTeam = async (page=1) => {
    try {
      showEmpty.value = false
      const response = await axiosClient.get(`/get-pba-team?page=${page}`)
      if (response.data.success === true) {
        teams.value = response.data.data
        if (response.data.data.data.length ===0) {
          showEmpty.value = true
        }
      }
    } catch (error) {
      errors.value = error
    }
  }
  const filterBookByCategoryId = async (id) => {
    try {
      books.value = []
      const response = await axiosClient.get(`/get-books-by-category/${id}`)
      if (response.data.success === true) {
        books.value = response.data.data
      }
    } catch (error) {
      errors.value = error
    }
  }

  return {
    getAllCategories,
    categories,
    success,
    loader,
    getAllBooks,
    books,
    filterBookByCategoryId,
    getBooksAParaitre,
    getLivresHipp,
    showEmpty,
    getBooksNouveautes,
    getPbaEvents,
    evenements,
    getPbaTrainings,
    trainings,
    getPbaTeam,
    teams,
    getDistributeurs,
    distributeurs,
  }
}
