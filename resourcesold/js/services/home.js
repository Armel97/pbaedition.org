

import axiosClient from "../helpers/axios"
import { ref } from 'vue'

export default function useHome() {
  const structure = ref()
  const loader = ref(false)
  const sent = ref(false)
  const success = ref(false)
  const showEmpty = ref(false)
  const errors = ref([])
  const livres = ref([])
  const livresFooter = ref([])
  const nouveautes = ref([])
  const livresAll = ref([])
  const allTeams = ref([])
  const events = ref([])
  const galleryCategories = ref([])
  const galleryTwo = ref([])
  const galleryThree = ref([])
  const galeries = ref([])
  const videos = ref([])
  const stages = ref([])

  const handleSubscribe = async data => {
    success.value = false
    await axiosClient.post('/subscribe', data)
      .then(response => {
        if (response.data.success === true) {
          success.value = true
        }
      })
      .catch(error => {
        success.value = false

        errors.value = ''
        errors.value = error.response.data.errors
        const createUserErrors = error.response.data.errors
        Object.keys(createUserErrors).forEach(key => {
          errorToast('Oups! Erreur', createUserErrors[key][0])
        })
      })
  }
  const handleContactForm = async data => {
    sent.value = false
    await axiosClient.post('/send-mail', data)
      .then(response => {
        if (response.data.success === true) {
          sent.value = true
        }
      })
      .catch(error => {
        sent.value = false

        errors.value = ''
        errors.value = error.response.data.errors
        const createUserErrors = error.response.data.errors
        Object.keys(createUserErrors).forEach(key => {
        })
      })
  }

  
  const getBookAParaitreForHome = async () => {
    try {
      showEmpty.value = false
      const response = await axiosClient.get('/get-books-a-paraitre-for-home')
      if (response.data.success === true) {
        livres.value = response.data.data
        if (response.data.data.data.length ===0) {
          showEmpty.value = true
        }
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getBookAParaitreForFooter = async () => {
    try {
      const response = await axiosClient.get('/get-books-a-paraitre-for-footer')
      if (response.data.success === true) {
        livresFooter.value = response.data.data
        if (response.data.data.data.length ===0) {
        }
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getBookNouveauteForHome = async () => {
    try {
      const response = await axiosClient.get('/get-books-nouveautes-for-home')
      if (response.data.success === true) {
        nouveautes.value = response.data.data
        
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getBookLivresForHome = async () => {
    try {
      const response = await axiosClient.get('/get-books-livres-for-home')
      if (response.data.success === true) {
        livresAll.value = response.data.data
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getTeamForHome = async () => {
    try {
      const response = await axiosClient.get('/get-team-for-home')
      if (response.data.success === true) {
        allTeams.value = response.data.data
      }
    } catch (error) {
      errors.value = error
    }
  }

  const getEventForHome = async () => {
    try {
      const response = await axiosClient.get('/get-events-for-home')
      if (response.data.success === true) {
        events.value = response.data.data
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getGalleryForHome = async () => {
    try {
      const response = await axiosClient.get('/get-galeries-for-home')
      if (response.data.success === true) {
        galleryCategories.value = response.data.data
      }
    } catch (error) {
      errors.value = error
    }
  }

  const getGalleryTwoForHome = async () => {
    try {
      const response = await axiosClient.get('/get-galeries-two-for-home')
      if (response.data.success === true) {
        galleryTwo.value = response.data.data
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getGalleryThreeForHome = async () => {
    try {
      const response = await axiosClient.get('/get-galeries-three-for-home')
      if (response.data.success === true) {
        galleryThree.value = response.data.data
      }
    } catch (error) {
      errors.value = error
    }
  }

  
  const getGallery = async (page=1) => {
    try {
      const response = await axiosClient.get(`/get-galeries?page=${page}`)
      if (response.data.success === true) {
        galeries.value = response.data.data
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getVideos = async (page=1) => {
    try {
      showEmpty.value = false

      const response = await axiosClient.get(`/get-videos?page=${page}`)
      if (response.data.success === true) {
        videos.value = response.data.data
        if (response.data.data.data.length ===0) {
          showEmpty.value = true
        }
      }
    } catch (error) {
      errors.value = error
    }
  }
  const getStages = async (page=1) => {
    try {
      showEmpty.value = false

      const response = await axiosClient.get(`/get-stages?page=${page}`)
      if (response.data.success === true) {
        stages.value = response.data.data
        if (response.data.data.data.length ===0) {
          showEmpty.value = true
        }
      }
    } catch (error) {
      errors.value = error
    }
  }

  return {
    handleSubscribe,
    success,
    loader,
    errors,
    getBookAParaitreForHome,
    livres,
    showEmpty,
    getBookNouveauteForHome,
    nouveautes,
    getBookLivresForHome,
    livresAll,
    getTeamForHome,
    allTeams,
    getEventForHome,
    events,
    handleContactForm,
    sent,
    getGalleryForHome,
    galleryCategories,
    getGallery,
    galeries,
    getVideos,
    videos,
    getStages,
    stages,
    getGalleryTwoForHome,
    galleryTwo,
    galleryThree,
    getGalleryThreeForHome,
    getBookAParaitreForFooter,
    livresFooter,
  }
}
